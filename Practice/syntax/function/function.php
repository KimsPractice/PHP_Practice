<?php
/*
function 함수이름 (입력값) {
  code...
  return 반환값;
}*/

  function numbering (){
    $i =0;
      while ($i <= 10) {
        echo $i."<br>";
        $i+=1;
      }
  }

  function return_test(){
    return '리턴된값입니다.';
  }

  numbering();
  echo "<br><br>";

  echo return_test();
 ?>
