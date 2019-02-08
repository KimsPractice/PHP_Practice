<?php
$file1 = 'tset.php';
echo file_get_contents($file1); // 파일내용 읽기
echo "<br><br>";

file_put_contents($file1, '쓰기 테스트 추가'); // (대상파일, 추가할내용)

?>
