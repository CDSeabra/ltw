<?php
  	include_once "database/connection.php";
	include_once "database/events.php";
	include_once "database/users.php";

	if(isset($_SESSION['username'])) {
		$result = getAllUsers();
	} else {
		$result = getAllUsers();
	}
	
	include "templates/header.php";
	include "templates/invite_users.php";
	include "templates/footer.php";
?>

