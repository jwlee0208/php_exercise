<?php
	$db_con = new PDO('mysql:host=127.0.0.1;dbname=php_exercise', 'root', '');
	if(!empty($_GET['id'])){
		$stmt = $db_con -> prepare("select * from article where id = :id");
		$stmt -> bindParam(':id', $id, PDO::PARAM_INT);
		$id = $_GET['id'];
		$stmt -> execute();
		$article = $stmt -> fetch();
	}
	$stmt = $db_con -> prepare('select * from article');
	$stmt -> execute();
	$list = $stmt -> fetchAll();		
	
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <style type="text/css">
            body {
                font-size: 0.8em;
                font-family: dotum;
                line-height: 1.6em;
            }
            header {
                border-bottom: 1px solid #ccc;
                padding: 20px 0;
            }
            nav {
                float: left;
                margin-right: 20px;
                min-height: 1000px;
                min-width:150px;
                border-right: 1px solid #ccc;
            }
            nav ul {
                list-style: none;
                padding-left: 0;
                padding-right: 20px;
            }
            article {
                float: left;
            }
            .description{
                width:500px;
            }
        </style>
    </head>
   
    <body id="body">
        <div>
            <nav>
                <ul>
                    <?php
                    foreach($list as $row) {
                        echo "<li><a href=\"?id={$row['id']}\">".htmlspecialchars($row['title'])."</a></li>";                        }
                    ?>
                </ul>
                <ul>
                    <li><a href="input.php">추가</a></li>
                </ul>
            </nav>
            <article>
                <?php
                if(!empty($article)){
                ?>
                <h2><?=htmlspecialchars($article['title'])?></h2>
                <div class="description">
                    <?=htmlspecialchars($article['content'])?>
                </div>
                <div>
                    <a href="modify.php?id=<?=$article['id']?>">수정</a>
                    <form method="POST" action="write.php?mode=delete">
                        <input type="hidden" name="id" value="<?=$article['id']?>" />
                        <input type="submit" value="삭제" />
                    </form>
                </div>
                <?php
                }
                ?>
            </article>
        </div>
    </body>
</html>	