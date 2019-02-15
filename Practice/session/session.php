<?php  //세션데이터파일이 저장될 위치
session_start();
$_SESSION['test']="세션테스트";

echo $_SESSION['test'];

 ?>
