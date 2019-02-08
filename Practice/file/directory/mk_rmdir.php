<?php
$dir='./';
$dir2= '1';
mkdir($dir2, 777, true); //디렉토리생성
print_r(scandir($dir));
echo "<br>";
rmdir($dir2);
print_r(scandir($dir));

 ?>
