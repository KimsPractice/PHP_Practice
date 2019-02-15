<?php
$dsn= "mysql:host=localhost;dbname=phppractice";
$duser="root";
$dpass="123456";
$pdo = new PDO($dsn, $duser,$dpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // 에러모드
if ($pdo) {
  echo "접속성공";
} else {
  echo "접속실패";
}
?>
