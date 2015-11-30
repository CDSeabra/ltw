<?php
  	include_once "database/connection.php";
	include_once "database/events.php";

	if(isset($_SESSION['username'])) {
		$result = getAllEvents(true);
	} else {
		$result = getAllEvents(false);
	}
	$event = getEventById($_GET['id_event']);
	
	include "templates/header.php";
	include "templates/edit_event.php";
	include "templates/footer.php";
?>
