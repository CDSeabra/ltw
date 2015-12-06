		<div class="event_single">
			<a id="going" href="users_going.php?id_event=<?=$result['id_event']?>"> Not Going: <?= count($not_going); ?></a>
			<a id="going" href="users_going.php?id_event=<?=$result['id_event']?>"> Going: <?= count($going); ?></a>
			<h3>Event's name: <?= $result['name'] ?></h3>
			<h4>Host: <?= getHost($result['id_event']); ?></h4>
			<? $image_name = getImage($result['id_event']); ?>
			<img src="images/<?="$image_name"?>" alt="Event's photo">
			<p>
			<span class="type">Type: <?=$result['tipo']?></span>
			<span>Place: <?=$result['place']?> </span>
			<span>Date: <?=$result['dat']?></span>
			<span>Time: <?=$result['time_init']?></span> <br>
			<span>Privacy: <? if($result['privado'] == 'true') echo 'Private'; else echo 'Public' ;?></span><br>
			<span id="description">Description: <?=$result['description']?></span>			
			</p>
			
		</div>
		<!-- GOD'S GIFT -->
		<div style="clear: both"></div>
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
				<textarea id="commenttext" rows="4" cols="80" name="comment_text" placeholder="Your Comment Goes Here!"></textarea>
				<input id="commentbutton" type="submit" name="comment" value="Comment!"></form>
			<?} ?>
		</div>
	</div>
</div>