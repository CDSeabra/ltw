<?php
	include_once "database/news.php";
	include_once "database/comments.php";
	
	$id = $_GET['id'];
	$row = getNewsById($db, $id);
	$comments = getNewsComments($db, $id);
?>
<div id="content">
	<div class="news-item">
		<div class="news-item">
		<h3> <?=$row['title']?></h3>
		<p class="introduction"><?=$row['introduction']?></p>
		<p><?=$row['fulltext']?></p>
		</div>
	</div>
	
	<?php include_once "templates/list_comments.php"; ?>
</div>