<?php
  	include_once "database/connection.php";
	include_once "database/events.php";
	include_once "database/users.php";

	if(isset($_SESSION['username'])) {
		$result = getAllEvents(true);
	} else {
		$result = getAllEvents(false);
	}
	
	if(isset($_SESSION['username']))
		$id_user = getUserId($_SESSION['username']);
	
	
	include "templates/header.php";
	include "templates/events.php";
	include "templates/footer.php";
?>

