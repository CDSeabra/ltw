<div>
	<? foreach($comments as $r) {?>
		<div class="comment-item">
		<h4> <?=$r['author']?></h4>
		<p class="comment-text"><?=$r['text']?></p>
		</div>
	<?}?>
</div>