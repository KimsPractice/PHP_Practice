<?php
$file = 'test.php';
$newfile = 'test.php_bak';

if (copy($file, $newfile))// (대상파일,복사될파일)
 {
 echo "복사에 성공했습니다.";
} else {
  echo "failed to copy $file...\n";
}
?>
