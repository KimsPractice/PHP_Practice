<?php
session_start();
session_destroy();
?>

<script type="text/javascript">
  alert('로그아웃되었습니다.');
</script>

<?php
  header("Location:  ./login.php");
 ?>
