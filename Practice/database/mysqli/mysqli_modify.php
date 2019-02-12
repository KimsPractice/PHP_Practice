<?php
include_once "./mysqli_conn.php";
$result = mysqli_query($conn, 'SELECT * FROM topic WHERE id = '.mysqli_real_escape_string($conn ,$_GET['id']));
$topic = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <form action="./mysqli_process.php?mode=modify" method="POST">
            <input type="hidden" name="id" value="<?=$topic['id']?>" />
            <p>제목 : <input type="text" name="title" value="<?=htmlspecialchars($topic['title'])?>"></p>
            <p>본문 : <textarea name="description" id="" cols="30" rows="10"><?=htmlspecialchars($topic['description'])?></textarea></p>
            <p><input type="submit" /></p>
        </form>
    </body>
</html>
