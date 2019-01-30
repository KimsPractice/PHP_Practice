

<?php
#변수 = 어떠한 값을 계속해서 수정하여 대입할 수 있음

  $a=1;
  echo $a+1;
  echo "<br />";
  $a=2;
  print $a+1;  #변수 숫자 실습
?>
<br>
<?php
  $first= "coding";
  echo $first . "everybody"; #변수 문자 실습
 ?>
 <br>
 <?php #변수를 사용하여 얻어지는 효율
 #사용전
  echo (100+10)."<br>";
 echo ((100+10)/10)."<br>";
 echo (((100+10)/10)-10)."<br>";
 echo ((((100+10)/10)-10)*10)."<br>";
 echo "<br>";
 #사용휴
 $a=100;
 $a+=10;
 echo $a."<br>";
 $a/=10;
 echo $a."<br>";
 $a-=10;
 echo $a."<br>";
 $a*=10;
 echo $a."<br>";

 #가변 변수 변수를 변수명으로 재사용 가능
 $title = "subject";
 $$title= "PHP Tutorial";
 echo $subject;
?>
