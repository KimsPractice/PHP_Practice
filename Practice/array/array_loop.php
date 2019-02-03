<?php
  function get_members(){
    $members = ["kimspractice",'poppy','webDeveloper'];
    return $members;
  }

  $memlist = get_members();

  for ($i=0; $i < count($memlist); $i++) {
    echo ucfirst($memlist[$i])."<br>";
  } //count()는 원소의 개수, ucfirst()는 값의 첫글자를 대문자로 변환

 ?>
