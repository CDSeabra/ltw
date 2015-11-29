<?php

  function getAllEvents() {
	global $db;
	
    $stmt = $db->prepare('SELECT * FROM events');
    $stmt->execute();  

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
	//print_r($result);	
		
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
