<?php
  function getAllNews() {
    global $db;
    
    $stmt = $db->prepare('SELECT * FROM news');
    $stmt->execute();  

    return $stmt->fetchAll();
  }
  
  function getNewsItem($id) {
    global $db;
    
    $stmt = $db->prepare('SELECT * FROM news WHERE id = ?');
    $stmt->execute(array($id));  

    return $stmt->fetch();
  }
  
  function updateNewsItem($id, $title, $introduction, $fulltext) {
    global $db;
    
    $stmt = $db->prepare('UPDATE news SET title = ?, introduction = ?, fulltext = ? WHERE id = ?');
    $stmt->execute(array($title, $introduction, $fulltext, $id));  

    return $stmt->fetch();
  }
?>
