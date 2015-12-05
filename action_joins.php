<?php
	include_once('database/connection.php'); // connects to the database
	include_once('database/users.php'); 
	include_once('database/events.php');
	
	if($_GET['status'] == 'Not going' && getStatusByIdUser($_SESSION['id_user'], $_GET['id_event']) == NULL){
		$stmt = $db->prepare('INSERT INTO events_users VALUES (?,?,?,?)');
		$stmt->execute(array(getHostId($_GET['id_event']), $_GET['id_event'], $_SESSION['id_user'], 'Not going'));
	} else if($_GET['status'] == 'Going' && getStatusByIdUser($_SESSION['id_user'], $_GET['id_event']) == NULL) {
		$stmt = $db->prepare('INSERT INTO events_users VALUES (?,?,?,?)');
		$stmt->execute(array(getHostId($_GET['id_event']), $_GET['id_event'], $_SESSION['id_user'], 'Going'));
	} else {
		$stmt = $db->prepare('UPDATE events_users SET status = ? WHERE id_event = ? AND id_user = ?');
		$stmt->execute(array(htmlspecialchars($_GET['status']), $_GET['id_event'], $_SESSION['id_user']));
	}
	
	header('Location: events.php');	//redirecionar para home 
?>