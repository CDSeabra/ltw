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
		<div id="login">
			<form id="login" action="login.php" method="get">
			<input type="submit" value="Login">
			<input type="submit" value="Register"></form>
		</div>
		<div id="header">
			<h1>Online Event Manager</h1>
			<h2>The best manager in the world (well...)</h2>
		</div>
		<div id="menu">
			<ul>
				<li><a href="">Create Event</a></li>
				<li><a href="">Edit My Events</a></li>
				<li><a href="">See invitations</a></li>
				<li><form id="searchbar" action="search.php" method="get">
					<input type="text" name="search" placeholder="Search"></input>
					<input type="submit" value=""></input>
					</form>
				</li>
			</ul>
		</div>
		<div id="sidebar">
		<ul>
				<li><a href="">Create Event</a></li>
				<li><a href="">Edit My Events</a></li>
				<li><a href="">See invitations</a></li>
				</ul>
			<!--TODO carregar lista dos eventos que o user aderiu--> 
		</div>
		
