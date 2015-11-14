<?php
  	include_once "database/connection.php";
	include_once "database/news.php";

	include "templates/header.php";
	$result = getAllNews($db);
	include "templates/list_news.php";
	include "templates/footer.php";
?>

