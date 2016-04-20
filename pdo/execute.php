<?php
$dbcon = new PDO('mysql:host=127.0.0.1;dbname=php_exercise', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
switch($_GET['mode']){
	case 'insert' : 
		$stmt = $dbcon->prepare("INSERT INTO article (title, content, create_date) VALUES (:title, :content, now())");
		// 파라미터 바인딩
		$stmt -> bindParam(':title', $title);
		$stmt -> bindParam(':content', $content);

		// 파라미터 설정
		$title = $_POST['title'];
		$content = $_POST['content'];

		// sql 실행
		$stmt -> execute();

		header("Location: list.php");
		break;
	case 'delete' :
		$stmt = $dbcon->prepare("DELETE FROM article WHER id = :id)");
		// 파라미터 바인딩
		$stmt -> bindParam(':id', $id);

		// 파라미터 설정
		$id = $_POST['id'];

		// sql 실행
		$stmt -> execute();

		header("Location: list.php");
		break;	
	case 'modify' : 
		$stmt = $dbcon->prepare("UPDATE article SET title = :title, content = :content WHERE id = :id");
		// 파라미터 바인딩
		$stmt -> bindParam(':title', $title);
		$stmt -> bindParam(':content', $content);
		$stmt -> bindParam(':id', $id);
		// 파라미터 설정
		$title = $_POST['title'];
		$content = $_POST['content'];
		$id = $_POST['id'];
		
		// sql 실행
		$stmt -> execute();

		header("Location: list.php?id={$_POST['id']}");
		break;		
}
?>