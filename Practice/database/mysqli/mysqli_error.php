<?php
$connect = mysqli_connect('localhost','root','123456');
mysqli_select_db($connect, 'phppractice');
mysqli_query($connect, "SELECT * FROM topic");
echo mysqli_error($connect);
 ?>
