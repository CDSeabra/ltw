<?php
	include_once('database/connection.php'); // connects to the database
	include_once('database/users.php'); 
	include_once('database/events.php');
	include_once('database/comments.php');
	
	$stmt1 = $db->prepare('SELECT id_user FROM users WHERE username = ?');
	$stmt1->execute(array($_SESSION['username']));
	
	$id_event = $_GET['id'];
	$id_user = $stmt1->fetch();
	$id_user = $id_user["id_user"];
	$texto = $_POST['comment_text'];
	
	$stmt = $db->prepare('INSERT INTO comments VALUES (NULL, ?, ?, ?)');
	$stmt->execute(array($id_event, $id_user, $texto));
	
	header("Location: single_event.php?id=$id_event");	//redirecionar para a página correcta
?>