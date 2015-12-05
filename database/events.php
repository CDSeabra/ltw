<?php

  function getAllEvents($loggedin) {
	global $db;
	
	if($loggedin){
		$stmt = $db->prepare('
		SELECT * FROM events WHERE privado = ?
		UNION ALL
		
		SELECT events.id_event, name, dat, description, tipo, place, time_init, time_end, privado
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
  
  function getMyEvents() {
	global $db;
	
    $stmt = $db->prepare('SELECT * FROM events, events_users WHERE events_users.id_event = events.id_event AND events_users.id_host = ? AND events_users.status = ?');
    $stmt->execute(array($_SESSION['id_user'], 'owner'));

    return $stmt->fetchAll();
  }
  
	function getEventById($id) {
		global $db;

		$stmt = $db->prepare('SELECT * FROM events WHERE id_event = ?');
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
  
  function checkEventsOwner($id_event, $id_user) {
	global $db;
	
	$stmt = $db->prepare('SELECT id_user FROM events_users WHERE id_host = id_user AND id_event = ? AND id_user = ?');
	$stmt->execute(array($id_event, $id_user));  
	$result = $stmt->fetch();
	
	if(!empty($result))
		return true;
	else
		return false;
  }
  
  /*
  function updateEventsItem($id, $title, $introduction, $fulltext) {
    global $db;
    
    $stmt = $db->prepare('UPDATE news SET title = ?, introduction = ?, fulltext = ? WHERE id = ?');
    $stmt->execute(array($title, $introduction, $fulltext, $id));  

    return $stmt->fetch();
  }*/
?>
