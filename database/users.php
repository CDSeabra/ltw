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
		$array = $array["username"];
		return implode("", (array)$array);
	}
	
	function getUserId($session_username) {
		global $db;
		$stmt = $db->prepare('SELECT id_user FROM users WHERE username = ?');
		$stmt->execute(array($session_username));
		$id_user = $stmt->fetch()[0];
		
		return $id_user;
	}
	
	function getAllUsers(){
		global $db;

		$stmt = $db->prepare('SELECT username FROM users');
		$stmt->execute();  

		return $stmt->fetchAll();
	}
	

	function getHost($id_event){
		global $db;
		$stmt = $db->prepare('SELECT id_host FROM events_users WHERE id_event = ?');
		$stmt->execute(array($id_event));
		
		$id = $stmt->fetch()[0];	
		
		$stmt1 = $db->prepare('SELECT username FROM users WHERE id_user = ?');
		$stmt1->execute(array($id));
		
		$username = $stmt1->fetch()[0];		
		return $username;
	}
	
	function getNotInvitedUsers($id){
		global $db;

		$stmt = $db->prepare('SELECT username FROM users WHERE id_user NOT IN (
		SELECT users.id_user FROM events_users, users WHERE users.id_user = events_users.id_user AND events_users.id_event = ? )');
		$stmt->execute(array($id));  

		return $stmt->fetchAll();
	}
?>
