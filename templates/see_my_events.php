  <div class="event">
    <?php foreach( $result as $row) {
		$delete = "action_delete_event.php?id_event=".$row['id_event'];?>
		<div class="single-event">
			<ul>
				<li><a href="edit_event.php?id_event=<?=$row['id_event']?>">Edit event</a></li>
				<li><a href="invite_users.php?id_event=<?=$row['id_event']?>">Invite</a></li>
				<li><a href="<?=$delete?>" onclick="if(!confirmDelete()) return false;">Delete Event</a></li>
			</ul>	
			<h3>Event's name: <?= $row['name'] ?></h3>
			
			<? $image_name = getImage($row['id_event']); ?>
			<img src="images/<?="$image_name"?>" alt="Event's photo">
			<p>
			<span class="type">Type: <?=$row['tipo']?></span> 
			<span>Place: <?=$row['place']?> </span>
			<span>Date: <?=$row['dat']?></span> <br>
			<span>Initial time: <?=$row['time_init']?></span>
			<span>Final time: <?=$row['time_end']?></span><br>
			<span id="seeeventsprivacy">Privacy: <? if($row['privado'] == 'true') echo 'Private'; else echo 'Public' ;?></span>
			</p>
			<!-- GOD'S GIFT -->
			<div style="clear: both"></div>
		</div>
		
		<script src="confirm_delete.js"> </script>
		
	<?php } ?>    
  </div>
  </div>
  </div>
