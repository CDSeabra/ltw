		<div class="event_single">
			<h3>Event's name: <?= $result['name'] ?></h3> <br>
			<? $image_name = getImage($result['id_event']); ?>
			<img src="images/<?="$image_name"?>" alt="Event's photo">
			<span class="type">Type: <?=$result['tipo']?></span><br>
			<span>Description: <?=$result['description']?></span><br>
			<span>Date: <?=$result['dat']?></span><br>
			<span>Privacy: <? if($result['privado'] == 'true') echo 'Private'; else echo 'Public' ;?></span>
		</div>
		
		<div id="comments">
			<h3>Comments</h3>
			<?php foreach($comments as $row) { ?>
			<div id="singlecomment">
				<span id="commentuser"><?= getUsername($row['id_user']);?>: </span>
				<span id="commenttexto"><?= $row['texto']?></span>		
			</div>
			<?php } ?>
			<? if (isset($_SESSION['username'])){?>
			<form id="commentform" action="action_comment.php?id=<?=$result['id_event']?>" method="post">
			<textarea id="commenttext" rows="4" cols="100" name="comment_text" placeholder="Your Comment Goes Here!"></textarea>
			<input id="commentbutton" type="submit" name="comment" value="Comment!"></form>
			<?} ?>
		</div>
	</div>
</div>