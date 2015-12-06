<?php 
	include_once "database/connection.php";
	include_once "database/events.php";
	include_once "database/comments.php";
	include_once "database/users.php";

	if(isset($_SESSION['username'])) {
		$invitations = getPendingInvites();
	}
	
	$stmt = $db->prepare('SELECT * FROM events WHERE id_event = ?');
	$stmt->execute(array($_GET['id']));
	$result = $stmt->fetch();
	
	$id = $_GET['id'];
	$comments = getEventsComments($db, $id);
	
	$going = getGoing($id);
	$not_going = getNotGoing($id);
	
	include "templates/header.php";
	include "templates/single_event.php";
	include "templates/footer.php";	
?>