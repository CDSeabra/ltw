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
  /*
  function updateEventsItem($id, $title, $introduction, $fulltext) {
    global $db;
    
    $stmt = $db->prepare('UPDATE news SET title = ?, introduction = ?, fulltext = ? WHERE id = ?');
    $stmt->execute(array($title, $introduction, $fulltext, $id));  

    return $stmt->fetch();
  }*/
?>
