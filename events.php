<?php
  	include_once "database/connection.php";
	include_once "database/events.php";
	
	if(isset($_SESSION['username'])) {
		$result = getAllEvents(true);
	} else {
		$result = getAllEvents(false);
	}
	
	include "templates/header.php";
	
	
	include "templates/events.php";
	include "templates/footer.php";
?>

