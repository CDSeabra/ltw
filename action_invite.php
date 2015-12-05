<?php
	include_once('database/connection.php'); // connects to the database
	include_once('database/users.php'); 
	include_once('database/events.php');
	
	//insert into events_users
	if(!empty($_POST['invitation'])) {
		foreach($_POST['invitation'] as $check) {
			$stmt = $db->prepare('INSERT INTO events_users VALUES (?, ?, ?, ?)');
			$stmt->execute(array($_SESSION['id_user'], $_POST['id_event'], $check, 'invited'));
		}
	}
	
	header('Location: see_my_events.php');	//redirecionar para home 
?>