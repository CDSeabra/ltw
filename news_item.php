<?php 
	include_once "database/connection.php";

	$stmt = $db->prepare('SELECT * FROM news WHERE id = ?');
	$stmt->execute(array($_GET['id']));
	$result = $stmt->fetch();
	
	include "templates/header.php";
	include "templates/news_item.php";
	include "templates/footer.php";
	
?>