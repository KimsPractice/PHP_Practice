<?php
echo getcwd()."<br>"; // 현재 디렉토리의 위치를 알려줌
chdir('../'); // ()안의 경로로 현재디렉토리 위치를 이동
echo getcwd()."<br>";
echo "<br><br>";

$dir='./';
$dir1= scandir($dir); //해당 디렉토리를 스캔한다.
$dir2= scandir($dir, 1); // 해당 디렉토리를 역순으로 스캔한다.
print_r($dir1);
echo "<br>";
print_r($dir2);
echo "<br><br>";




?>
