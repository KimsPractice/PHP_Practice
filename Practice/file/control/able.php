<?php

$file = 'test.php';

if (is_readable($file)) {
  echo "파일읽기 가능";
} else {
  echo "파일읽기 불가능";
}
echo "<br><br>";

if (is_writable($file)) {
  echo "파일쓰기 가능";
} else {
  echo "파일쓰기 불가능";
}

echo "<br><br>";
if (file_exists($file)) {
  echo "파일이 존재";
} else {
  echo "파일이 존재하지 않음";
}
?>
