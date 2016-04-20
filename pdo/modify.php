<?php
$db_con = new PDO('mysql:host=127.0.0.1;dbname=php_exercise', 'root', '');
$stmt = $db_con -> prepare('SELECT * FROM article WHERE id = :id');
$stmt -> bindParam(':id', $id, PDO::PARAM_INT);
$id = $_GET['id'];
$stmt -> execute();
$article = $stmt -> fetch();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>   
    <body>
        <form action="./execute.php?mode=modify" method="POST">
            <input type="hidden" name="id" value="<?=$article['id']?>" />
            <p>제목 : <input type="text" name="title" value="<?=htmlspecialchars($article['title'])?>"></p>
            <p>본문 : <textarea name="content" id="" cols="30" rows="10"><?=htmlspecialchars($article['content'])?></textarea></p>
            <p><input type="submit" /></p>
        </form>
    </body>
</html>