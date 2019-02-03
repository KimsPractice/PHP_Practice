<?php
/*
  for (값 초기화; boolean; 루프 종료마다 실행) {
    // code...
  }
*/
  for ($i=0; $i < 10; $i++) {
    if ($i === 5) {
      break;
    }
    echo "for test{$i}<br>";
  }
 ?>
