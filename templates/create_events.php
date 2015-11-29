<div class="event">
    <form id="create_event" action="action_create_events.php" method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>Create event:</legend>
			<input type="text" name="event_name" placeholder="Event's name" required></input>
			<input type="text" name="event_type" placeholder="Event's type" required></input>
			<?$today = date('m-j-Y');?>
			<input type="date" name="event_date" value="<?=$today?>"></input>
			<textarea rows="4" cols="50" name="event_description" placeholder="Event's description"></textarea>
			<input type="radio" name="private" value="true" checked="checked">Private
			<input type="radio" name="private" value="false">Public
			<input type="file" name="fileToUpload" id="fileToUpload">
			<input type="submit" name= "create" value="Create Event!">
		</fieldset>
	</form>
</div>
 </div>
  </div>
