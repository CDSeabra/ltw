<?php
  	include_once "database/connection.php";
	include_once "database/events.php";

	include "templates/header.php";
	$result = getAllEvents();
	include "templates/events.php";
	include "templates/footer.php";
?>

