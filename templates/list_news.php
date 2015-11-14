<div id="content">
	<div class="news-item">
	
	<? foreach($result as $row) {?>
		<div class="news-item">
		<h3> <?=$row['title']?></h3>
		<p class="introduction"><?=$row['introduction']?></p>
		<a href="news_item.php?id=<?=$row['id']?>">See More</a>
		</div>
	<?}?>
	</div>		
</div>