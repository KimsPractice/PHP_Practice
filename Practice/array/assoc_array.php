<?php
//연관배열
 $list1 = array('a' => 10, 'b' => 20, 'c' => 30,'d' => 40 );
 echo $list['a'];
 echo "<br>";
 var_dump($list);
 echo "<br><br>";
//연관배열2
 $list2 = [];
 $list2['aa'=>10];
 $list2['bb'=>20];
 $list2['cc'=>30];
 $list2['dd'=>40];
 $list2['ee'=>50];
 var_dump($list2);
 echo "<br><br>";
//배열 열거
  foreach ($list as $key => $value) {
      echo "key: {$key} value: {$value}<br>";
  }

 ?>
