<?php
	include_once('database/connection.php'); // connects to the database
	include_once('database/users.php'); 
	include_once('database/events.php');
	include_once('database/comments.php');

	//TODO criar cena em Javascript para verificar se o user quer mesmo apagar o evento
	
	$stmt = $db->prepare('DELETE FROM events WHERE id_event = ?');
	$stmt->execute(array($_GET['id_event']));

	
	header('Location: see_my_events.php');
?>