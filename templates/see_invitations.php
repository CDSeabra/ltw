  <div class="event">
    <?php foreach( $result as $row) {
		?>
		<div class="single-event">
			<ul>
				<li><a href="single_event.php?id=<?=$row['id_event']?>">See More</a></li>
				<? if(isset($_SESSION['username']) && (getHostId($row['id_event']) != $_SESSION['id_user']) && (getStatusByIdUser($_SESSION['id_user'], $row['id_event']) == 'invited')){?>
				<li><a href="action_joins.php?status=Going&id_event=<?=$row['id_event']?>">Going</a></li>
				<li><a href="action_joins.php?status=Not%20going&id_event=<?=$row['id_event']?>">Not going</a></li>
				<?} else if(isset($_SESSION['username']) && (getHostId($row['id_event']) != $_SESSION['id_user']) && (getStatusByIdUser($_SESSION['id_user'], $row['id_event']) == 'Not going')){?>
				<li><a href="action_joins.php?status=Going&id_event=<?=$row['id_event']?>">Going</a></li>
				<?} else if(isset($_SESSION['username']) && (getHostId($row['id_event']) != $_SESSION['id_user']) && (getStatusByIdUser($_SESSION['id_user'], $row['id_event']) == 'Going')){?>
				<li><a href="action_joins.php?status=Not%20going&id_event=<?=$row['id_event']?>">Not going</a></li>
				<?}?>
			</ul>
			<h3><a href="single_event.php?id=<?=$row['id_event']?>">Event's name: <?= $row['name'] ?></a></h3> <br>
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
