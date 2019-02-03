<?php
  //배열의 추가제거
  $list = ['a','b','c','d','e'];
  array_push($list, 'f');//맨뒤에 추가
  var_dump($list);
  echo "<br><br>";

  array_unshift($list, 'z'); //맨앞에 추가
  var_dump($list);
  echo "<br><br>";

  array_shift($list); //맨앞에 제거
  var_dump($list);
  echo "<br><br>";

  array_pop($list); //맨뒤에 제거
  var_dump($list);
  echo "<br><br>";

  //배열의 정렬
  $list2 = ['e','a','d','b','c'];
  var_dump($list2);
  echo "<br><br>";

  sort($list2); //정렬
  var_dump($list2);
  echo "<br><br>";

  rsort($list2); //역순정렬
  var_dump($list2);
  echo "<br><br>";
 ?>
