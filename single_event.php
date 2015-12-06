<?php 
	include_once "database/connection.php";
	include_once "database/events.php";
	include_once "database/comments.php";
	include_once "database/users.php";

	if(isset($_SESSION['username'])) {
		$result = getAllEvents(true);
		$invitations = getPendingInvites();
	} else {
		$result = getAllEvents(false);
	}
	
	include "templates/header.php";
	
	$stmt = $db->prepare('SELECT * FROM events WHERE id_event = ?');
	$stmt->execute(array($_GET['id']));
	$result = $stmt->fetch();
	
	$id = $_GET['id'];
	$comments = getEventsComments($db, $id);
	
	include "templates/single_event.php";
	include "templates/footer.php";	
?>