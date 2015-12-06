<?php
	global $db;
	
	// Get Search
	$search_string = strip_tags($_POST['search']);
	

	// Check Length More Than One Character
	//if (strlen($search_string) >= 1 && $search_string !== ' ') {
	
		// Build Query
		$stmt = $db->prepare('SELECT * FROM events WHERE privado = ?
			UNION ALL
			SELECT events.id_event, name, dat, description, tipo, place, time_init, time_end, privado
			FROM events, users, events_users 
			WHERE privado = ? AND users.id_user = (SELECT id_user FROM users WHERE username = ?) AND (users.id_user = events_users.id_user OR users.id_user = events_users.id_host)
			AND events.id_event = events_users.id_event)');
		$stmt->execute(array('false', 'true', $_SESSION['username']));
		
		$search_results = $stmt->fetchAll();
	//}
?>