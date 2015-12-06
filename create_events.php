<?php
  	include_once "database/connection.php";
	include_once "database/events.php";

	date_default_timezone_set("Europe/Lisbon");
	
	if(isset($_SESSION['username'])) {
		$result = getAllEvents(true);
		$invitations = getPendingInvites();
	} else {
		$result = getAllEvents(false);
	}
	
	include "templates/header.php";
	include "templates/create_events.php";
	include "templates/footer.php";
?>
