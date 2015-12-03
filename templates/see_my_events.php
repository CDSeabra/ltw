  <div class="event">
    <?php foreach( $result as $row) {
		?>
		<div class="single-event">
			<ul>
				<li><a href="edit_event.php?id_event=<?=$row['id_event']?>">Edit event</a></li>
				<li><a href="">Share</a></li>
				<li><a href="action_delete_event.php?id_event=<?=$row['id_event']?>">Delete Event CUIDADO NÃO VERIFICA</a></li>
			</ul>	
			<h3>Event's name: <?= $row['name'] ?></h3>
			<p class="type">Type: <?=$row['tipo']?></p>
			<? $image_name = getImage($row['id_event']); ?>
			<img src="images/<?="$image_name"?>" alt="Event's photo">
			<p>Description: <?=$row['description']?></p>
			<p>Date: <?=$row['dat']?></p>
			<p id="seeeventsprivacy">Privacy: <? if($row['privado'] == 'true') echo 'Private'; else echo 'Public' ;?></p>
			
			<!-- GOD'S GIFT -->
			<div style="clear: both"></div>
		</div>
		
	<?php } ?>    
  </div>
  </div>
  </div>
