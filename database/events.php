<?php

  function getAllEvents($loggedin) {
	global $db;
	
	if($loggedin){
		$stmt = $db->prepare('
		SELECT * FROM events WHERE privado = ?
		UNION ALL
		
		SELECT events.id_event, name, dat, description, tipo, privado
		FROM events, users, events_users 
		WHERE privado = ? AND users.id_user = (SELECT id_user FROM users WHERE username = ?) AND (users.id_user = events_users.id_user OR users.id_user = events_users.id_host)
		AND events.id_event = events_users.id_event');
		
		$stmt->execute(array('false', 'true', $_SESSION['username']));  

	} else {
		$stmt = $db->prepare('SELECT * FROM events WHERE privado = ?');
		$stmt->execute(array('false'));  
	}
	
	return $stmt->fetchAll();
  }
  
  function getEventsItem($id) {
	global $db;
	
    $stmt = $db->prepare('SELECT * FROM events WHERE id = ?');
    $stmt->execute(array($id));  

    return $stmt->fetch();
  }
  
  function getImage($id_event) {
	global $db;
	
    //$stmt = $db->prepare('SELECT images.name FROM images, events WHERE images.id_event = ? AND events.id_event = images.id_event');
	$stmt = $db->prepare('SELECT images.name FROM images WHERE images.id_event = ?');
    $stmt->execute(array($id_event));  
	$result = $stmt->fetch()[0];	
		
    return $result;
  }
  
  /*
  function updateEventsItem($id, $title, $introduction, $fulltext) {
    global $db;
    
    $stmt = $db->prepare('UPDATE news SET title = ?, introduction = ?, fulltext = ? WHERE id = ?');
    $stmt->execute(array($title, $introduction, $fulltext, $id));  

    return $stmt->fetch();
  }*/
?>
