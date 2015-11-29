<!DOCTYPE html>
<?php
	include_once "database/connection.php";
?>

<html>
	<head>
		<title>Event Manager</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
		if (isset($_SESSION['username'])){?>
		<div id="logout">
			<form id="logout" action="action_logout.php" method="post">
			<label>Hello, <?=$_SESSION['username']?>!  </label><input type="submit" value="Logout"></form>
		</div>
		<?} else {?>
		<div id="login">
			<form id="login" action="action_login.php" method="post">
			<input type="text" name="username" placeholder="Username"></input>
			<input type="password" name="password" placeholder="Password"></input>
			<input type="submit" name= "login" value="Login">			
			<input type="submit" name= "register" value="Register"></form>
		</div>
		<?} ?>
			<div id="header">
			<h1><a href='events.php'>Online Event Manager</a></h1>
			<h2>The best manager in the world (well...)</h2>
		</div>
		<div id="menu">
			<ul><?php if (isset($_SESSION['username'])){?>
				<li><a href="create_events.php">Create Event</a></li>
				<li><a href="">Edit My Events</a></li>
				<li><a href="">See invitations</a></li>
			<?}?>
				<li><form id="searchbar" action="search.php" method="get">
					<input type="text" name="search" placeholder="Search"></input>
					<input id="searchbutton" type="submit" value=""></input>
					</form>
				</li>
			</ul>
		</div>
		<div id= "container2">
		<div id= "container">
		<div id="sidebar">
		<ul>
				<li><a href="">Evento A Que Vai 1</a></li>
				<li><a href="">Evento A Que Vai 1</a></li>
				<li><a href="">Uma lista dos eventos a que vai</a></li>
				</ul>
			<!--TODO carregar lista dos eventos que o user aderiu--> 
		</div>
		
