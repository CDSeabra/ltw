  <div class="event">
    <?php foreach( $result as $row) {
		?>
		<div class="single-event">
			<h3>Event's name: <?= $row['name'] ?></h3>
			<p class="type">Type: <?=$row['tipo']?></p>
			<? $image_name = getImage($row['id_event']); ?>
			<img src="images/<?="$image_name"?>" alt="Event's photo">
			<p>Description: <?=$row['description']?></p>
			<p>Date: <?=$row['dat']?></p>
			<p>Privacy: <? if($row['privado'] == 'true') echo 'Private'; else echo 'Public' ;?></p>
			
			<ul>
			  <li><a href="">Join</a></li>
			  <li><a href="">Comments</a></li>
			  <li><a href="">Share</a></li>
			</ul>
		</div>
	<?php } ?>    
  </div>
  </div>
  </div>
