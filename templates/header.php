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
			<input type="text" name="username" placeholder="Username" required></input>
			<input type="password" title="At least 3 symbols containing at least 1 number, 1 lower, and 1 upper letter" type="text" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{3,}" required name="password" placeholder="Password"></input>
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
				<li><a href="see_my_events.php">See My Events</a></li>
				<li><a href="">See Invitations</a></li>
			<?}?>
				<li><form id="searchbar" action="search.php" method="get">
					<input type="text" name="search" placeholder="Search" required style="width: 150px;"></input>
					<button id="searchbutton" type="submit" style="border: 0; background: transparent"><img src="bin/search.png" width="15" height="15" alt="submit" /></button>
					</form>
				</li>
			</ul>
		</div>
		<div id= "container2">
		<div id= "container">
		<div id="sidebar">
		<?php foreach( $result as $row) {  ?>
			 <a href="single_event.php?id=<?=$row['id_event']?>"><?= $row['name'] ?></a>
		<?php } ?>    
		</div>
		
