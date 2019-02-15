<?php
include_once "pdo_conn.php";
//기능별 SQL문
$insert_sql = "INSERT INTO topic (title, description, created) VALUES (:title, :description, now())";
$delete_sql = "DELETE FROM topic WHERE id =:id";
$update_sql = "UPDATE topic SET title = :title , description = :description WHERE id = :id";

switch ($_GET['mode']) {
  case 'insert':
    $stmt = $pdo->prepare($insert_sql);
    $stmt->bindParam(':title',$title);
    $stmt->bindParam(':description',$description);

    $title= $_POST['title'];
    $description = $_POST['description'];

    $stmt->execute();
    header("Location:  list.php");
  break;

  case 'modify':
    $stmt = $pdo->prepare($update_sql);
    $stmt->bindParam(":title",$title);
    $stmt->bindParam(":description",$description);
    $stmt->bindParam(":id",$id);

    $title= $_POST['title'];
    $description = $_POST['description'];
    $id= $_POST['id'];

    $stmt->execute();
    header("Location:  list.php");
  break;

  case 'delete':
    $stmt=$pdo->prepare($delete_sql);
    $stmt->bindParam(":id",$id);

    $id=$_POST['id'];
    $stmt->execute();

    header("Location:  list.php");
  break;

}

 ?>
