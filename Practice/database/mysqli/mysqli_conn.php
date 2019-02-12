<?php
//MYSQL 연결
$conn = mysqli_connect('localhost','root','123456');
if ($conn) {
//사용할 DB 선택
mysqli_select_db($conn, 'phppractice');
echo "접속 성공";

}else {
  echo "접속실패";
}
 ?>
