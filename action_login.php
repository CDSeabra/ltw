<?php
	include_once('database/connection.php'); // connects to the database
	include_once('database/users.php');      // loads the functions responsible for the users table

	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);
	
	if (usernameExists($username)){ // test if user exists
		if($_POST['login'] && userExists($username, $password)) {
			$_SESSION['username'] = $username;            // store the username
		}
		else
			/*ERRO: User já existe*/
			$_SESSION['error_messages'][] = "Error: combination of username and password is wrong";
		}
	else{														//user doesn't exist
		if(isset($_POST['register'])) {
			/*regista*/
			$stmt = $db->prepare('INSERT INTO users VALUES (NULL, ?, ?)');
			$stmt->execute(array($username, sha1($password)));  
			$_SESSION['username'] = $username;
		}
		else {
			/*ERRO: user não existe*/
			$_SESSION['error_messages'][] = "Error: combination of username and password is wrong";
		}
	}
	header('Location: events.php');	//redirecionar para home 
?>
