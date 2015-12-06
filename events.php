<?php
  	include_once "database/connection.php";
	include_once "database/events.php";
	include_once "database/users.php";

	if(isset($_SESSION['username'])) {
		$result = getAllEvents(true);
		$id_user = getUserId($_SESSION['username']);
		$invitations = getPendingInvites();
	} else {
		$result = getAllEvents(false);
	}
	
	
	include "templates/header.php";
	include "templates/events.php";
	include "templates/footer.php";
?>

