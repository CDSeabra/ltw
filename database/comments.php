<?php
	function getEventsComments($db, $id) {
		$stmt = $db->prepare('SELECT * FROM comments WHERE id_event = ?');
		$stmt->execute(array($id));  
		return $stmt->fetchAll();
	}
?>