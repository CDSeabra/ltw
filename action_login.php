<?php
  session_start();                         // starts the session
  
  include_once('database/connection.php'); // connects to the database
  include_once('database/users.php');      // loads the functions responsible for the users table
  
	//TODO: criar a PORRA das variaveius, segundo o execerciooa da auyla s
	//todo NAO SER IDIOTAS FODIDOS QUE NÃO ALTERAM O FICHEIRO CERTO E DEPOIS FICAM SURPREENDIDOS QUANDO AS MERDAS NÃO FUNCIONAM
	
	echo "AGSAVHSGVAHG";
	
  if (userExists($_GET['username'], $_GET['password'])){ // test if user exists
    if($_GET['login'])
	{
		echo "ahabha";
		$_SESSION['username'] = $_GET['username'];            // store the username
	}
	else
		/*ERRO: User já existe*/
		echo "Error: user already exists";
  }
  else{														//user doesn't exist
	if($_GET['login'])
		/*ERRO: user não existe*/
	echo "Error: user doesn't exist";
	else
		/*regista*/
		$stmt = $db->prepare('INSERT INTO users (?, ?)');
		$stmt->execute(array($username, sha1($password)));  
  }
  header('Location: events.php');	//redirecionar para home 
?>
