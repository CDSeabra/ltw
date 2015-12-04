	<div class="event">
		<h3>Users:</h3>
		<form action="action_invite.php" method="post">
			<input type="hidden" name="id_event" value="<?=$_GET['id_event']?>"/>
			<?php foreach( $result as $row) {
				if($row['username'] != $_SESSION['username']) {?>
			<div class="single-event">
				<input type="checkbox" name="invitation" value="<?=$row['username']?>"><?=$row['username']?><br>
			</div>
				<?php }} ?>
			<input type="submit" value="Invite!">			 
		</form>
	</div>
</div>
</div>
