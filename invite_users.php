<?php
  	include_once "database/connection.php";
	include_once "database/events.php";
	include_once "database/users.php";

	if(isset($_SESSION['id_user']) &&  isset($_GET['id_event'])) {
		$result = getNotInvitedUsers($_GET['id_event']);
	}
	
	include "templates/header.php";
	include "templates/invite_users.php";
	include "templates/footer.php";
?>

