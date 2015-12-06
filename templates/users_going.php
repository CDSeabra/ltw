	<div class="event">
		<?if(!empty($going)){?>
		<h3>Users going:</h3>
		<p>
			<ul>
			<?php foreach( $going as $row) {
				if($row['username']) {?>
			
				<li><?=$row['username']?></li>
			
				<?php }} ?>	
			</ul>
		</p>
		<?}?>
		<?if(!empty($not_going)){?>
		<h3>Users not going:</h3>
		<p>
			<ul>
			<?php foreach( $not_going as $row) {
				if($row['username']) {?>
	
				<li><?=$row['username']?></li>
			
				<?php }} ?>	
			</ul>	
		</p>
		<?}?>
		
		<?if(empty($going) && empty($not_going) ){?>
			<h3>No users have answered regarding this event.</h3>
		<?}?>
	</div>
</div>
</div>
