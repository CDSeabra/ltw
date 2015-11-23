<?php
	include_once('database/connection.php'); // connects to the database
	include_once('database/users.php');      // loads the functions responsible for the users table

	if (usernameExists($_POST['username'])){ // test if user exists
		if($_POST['login'] && userExists($_POST['username'], $_POST['password'])) {
			$_SESSION['username'] = $_POST['username'];            // store the username
		}
		else
			/*ERRO: User já existe*/
			echo "Error: combination of username and password is wrong";
		}
	else{														//user doesn't exist
		if(isset($_POST['register'])) {
			/*regista*/
			$stmt = $db->prepare('INSERT INTO users VALUES (NULL, ?, ?)');
			$stmt->execute(array($_POST['username'], sha1($_POST['password'])));  
			$_SESSION['username'] = $_POST['username'];
		}
		else {
			/*ERRO: user não existe*/
			echo "Error: combination of username and password is wrong";
		}
	}
	header('Location: events.php');	//redirecionar para home 
?>
