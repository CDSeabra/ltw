  <div class="event">
    <?php foreach( $result as $row) {
		?>
		<div class="single-event">
			<ul>
				<? if(isset($_SESSION['username']) && !checkEventsOwner($row['id_event'], $id_user)){?>
				<li><a href="">Join</a></li>
				<?}?>
				<li><a href="single_event.php?id=<?=$row['id_event']?>">See More</a></li>
				<li><a href="">Share</a></li>
			</ul>
			<h3><a href="single_event.php?id=<?=$row['id_event']?>">Event's name: <?= $row['name'] ?></a></h3>
			<? $image_name = getImage($row['id_event']); ?>
			<img src="images/<?="$image_name"?>" alt="Event's photo">
			<p>
			<span class="type">Type: <?=$row['tipo']?></span><br>
			<span>Description: <?=$row['description']?></span><br>
			<span>Place: <?=$row['place']?> </span><br>
			<span>Date: <?=$row['dat']?></span><br>
			<span>Initial time: <?=$row['time_init']?></span><br>
			<span>Final time: <?=$row['time_end']?></span><br>
			<span>Privacy: <? if($row['privado'] == 'true') echo 'Private'; else echo 'Public' ;?></span>
			</p>			
			<!-- GOD'S GIFT -->
			<div style="clear: both"></div>
		</div>
	<?php } ?>    
  </div>
  </div>
  </div>
