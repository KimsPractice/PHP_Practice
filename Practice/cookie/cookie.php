<?php
setcookie("cookie1","쿠키테스트입니다.");
setcookie("cookie2", time(), time()+60);  //("쿠키이름","저장할데이터","유효기간")

echo $_COOKIE['cookie1']."<br>";
echo $_COOKIE['cookie2'];
 ?>
