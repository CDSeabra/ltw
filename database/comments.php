<?php
	function getNewsComments($db, $id) {
		$stmt = $db->prepare('SELECT * FROM comments WHERE news_id = ?');
		$stmt->execute(array($id));  
		return $stmt->fetchAll();
	}
?>