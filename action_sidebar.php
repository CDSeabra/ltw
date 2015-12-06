<?php
	include_once('database/connection.php'); // connects to the database
	include_once('database/users.php');      // loads the functions responsible for the users table
	
	if(isset($_SESSION['username'])){
		if(isset($_POST['going'])) {
			echo $_SESSION['username'];
			echo " vai a ";
			echo $_POST['id_event'];
			$stmt = $db->prepare('UPDATE events_users SET status = ? WHERE id_event = ? AND id_user = ?');
			$stmt->execute(array('Going', $_POST['id_event'], $_SESSION['id_user']));
		} else if(isset($_POST['notgoing'])){
			echo $_SESSION['username'];
			echo " nao vai a ";
			echo $_POST['id_event'];
			$stmt = $db->prepare('UPDATE events_users SET status = ? WHERE id_event = ? AND id_user = ?');
			$stmt->execute(array('Not going', $_POST['id_event'], $_SESSION['id_user']));
		}
	}

	header('Location: events.php');	//redirecionar para home 
?>
