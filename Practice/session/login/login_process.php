<?php
session_start();
$id="KimsPractice";
$pwd="1234";
if(!empty($_POST['id']) && !empty($_POST['pwd'])){
    if($_POST['id'] == $id && $_POST['pwd'] == $pwd){
        $_SESSION['is_login'] = true;
        $_SESSION['nickname'] = '킴동글';
        header('Location: ./sucess.php');
        exit;
    }
}
echo '로그인 하지 못했습니다.';
 ?>
