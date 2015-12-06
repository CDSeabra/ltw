<?php
  	include_once "database/connection.php";
	include_once "database/events.php";
	include_once "database/users.php";

	if(isset($_SESSION['username'])) {
		$result = getInvitedEvents();
		$invitations = getPendingInvites();
	}	
	
	
	include "templates/header.php";
	include "templates/see_invitations.php";
	include "templates/footer.php";
?>

