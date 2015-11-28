<?php
	include_once('database/connection.php'); // connects to the database
	include_once('database/users.php'); 
	include_once('database/events.php');

	$stmt = $db->prepare('INSERT INTO events VALUES (NULL, ?, ?, ?, ?, ?)');
	$stmt->execute(array($_POST['event_name'], $_POST['event_date'], $_POST['event_description'], $_POST['event_type'], $_POST['private']));  

	header('Location: events.php');	//redirecionar para home 
?>