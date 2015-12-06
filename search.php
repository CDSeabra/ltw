<?php
	include_once "database/connection.php";
	include_once "database/events.php";
	include_once "database/users.php";
	
	global $db;
	
	// Get Search
	$search_string = strip_tags($_POST['search']);
	

	// Check Length More Than One Character
	if (strlen($search_string) >= 1 && $search_string !== ' ') {
		if(isset($_SESSION['username'])){
			// Build Query

			$stmt = $db->prepare("SELECT * FROM events WHERE privado = ? AND (name LIKE '%$search_string%' OR tipo LIKE '%$search_string%' OR place LIKE '%$search_string%')
				UNION ALL
				SELECT events.id_event, name, dat, description, tipo, place, time_init, time_end, privado
				FROM events, users, events_users 
				WHERE privado = ? AND users.id_user = (SELECT id_user FROM users WHERE username = ?) AND (users.id_user = events_users.id_user OR users.id_user = events_users.id_host)
				AND events.id_event = events_users.id_event AND (name LIKE '%$search_string%' OR tipo LIKE '%$search_string%' OR place LIKE '%$search_string%')");
			$result = $stmt->execute(array('false', 'true', $_SESSION['username']));
			$invitations = getPendingInvites();
		} else {
			$stmt = $db->prepare("SELECT * FROM events WHERE privado = ? AND (name LIKE '%$search_string%' OR tipo LIKE '%$search_string%' OR place LIKE '%$search_string%')");
			$stmt->execute(array('false'));
		}
		$result = $stmt->fetchAll();
		
	}
	
	include "templates/header.php";
	include "templates/events.php";
	include "templates/footer.php";
?>