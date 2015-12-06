<?php
  	include_once "database/connection.php";
	include_once "database/events.php";
	include_once "database/users.php";

	if(isset($_SESSION['id_user']) &&  isset($_GET['id_event'])) {
		$result = getNotInvitedUsers($_GET['id_event']);
		$invitations = getPendingInvites();
	}
	
	$going = getGoing($_GET['id_event']);
	$not_going = getNotGoing($_GET['id_event']);
	
	include "templates/header.php";
	include "templates/users_going.php";
	include "templates/footer.php";
?>

