<?php
include_once './mysqli_conn.php';

$id = mysqli_real_escape_string($conn, $_POST['id']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
//기능별 SQL문
$insert_sql = "INSERT INTO topic (title, description, created) VALUES ('".$title."', '".$description."', now())";
$delete_sql = "DELETE FROM topic WHERE id ='".$id."'";
$update_sql = "UPDATE topic SET title = '".$title."', description = '".$description."' WHERE id = '".mysqli_real_escape_string($conn, $_POST['id'])."'";


// mode='case' 에 따른 조건문
switch ($_GET['mode']) {
  case 'insert':
       $result = mysqli_query($conn, $insert_sql);
       header("Location: list.php");
       break;
   case 'delete':
       mysqli_query($conn, $delete_sql);
       header("Location: list.php");
       break;
   case 'modify':
       mysqli_query($conn, $update_sql);
       header("Location: list.php?id={$_POST['id']}");
       break;
}

 ?>
