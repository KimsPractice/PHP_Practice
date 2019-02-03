<?php
  if ($_GET['id'] === 'poppy') {
    if ($_GET['password'] === '1234') {
      echo "일치합니다.";
    }
  } else {
    echo "틀렸습니다.";
  }

 ?>
