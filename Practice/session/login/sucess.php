<?php
session_start();
if (!isset($_SESSION['is_login'])) {
  header("Location:  ./login.php");
}
 ?>

 <!DOCTYPE html>
 <html lang="ko" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php echo $_SESSION['nickname']; ?>님 환영합니다.<br>
     <a href="./logout.php">로그아웃</a>
   </body>
 </html>
