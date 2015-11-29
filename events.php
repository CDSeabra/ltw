<?php
  	include_once "database/connection.php";
	include_once "database/events.php";

	$result = getAllEvents();
	include "templates/header.php";	
	include "templates/events.php";
	include "templates/footer.php";
?>

