<?php
	function userExists($username, $password) {
		global $db;

		$stmt = $db->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
		$stmt->execute(array($username, sha1($password)));  

		return $stmt->fetch() !== false;
	}
	
	function usernameExists($username) {
		global $db;

		$stmt = $db->prepare('SELECT * FROM users WHERE username = ?');
		$stmt->execute(array($username));  

		return $stmt->fetch() !== false;
	}
	
	function getUsername($id_user) {
		global $db;
		$stmt = $db->prepare('SELECT username FROM users WHERE id_user = ?');
		$stmt->execute(array($id_user));
		
		
		$array = $stmt->fetch();
		return implode("", (array)$array);
	}
?>
