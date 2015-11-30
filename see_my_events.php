<?php
  	include_once "database/connection.php";
	include_once "database/events.php";

	if(isset($_SESSION['username'])) {
		$result = getMyEvents();
	} else {
		exit;
	}
	
	include "templates/header.php";
	include "templates/see_my_events.php";
	include "templates/footer.php";
?>

