<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <form action="./pdo_process.php?mode=insert" method="POST">
            <p>제목 : <input type="text" name="title"></p>
            <p>본문 : <textarea name="description" id="" cols="30" rows="10"></textarea></p>
            <p><input type="submit" value="보내기"/></p>
        </form>
    </body>
</html>