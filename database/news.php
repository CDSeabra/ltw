<?php	
	function getAllNews($db) {
		$stmt = $db->prepare('SELECT * FROM news');
		$stmt->execute();  
		return $stmt->fetchAll();
	}

	function getNewsById($db, $id) {
		$stmt = $db->prepare('SELECT * FROM news WHERE id = ?');
		$stmt->execute(array($id));  
		return $stmt->fetch();
	}
?>