<div class="event">
    <form id="create_event" action="action_create_events.php" method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>Create event:</legend>
			<input id="eventname" type="text" name="event_name" placeholder="Event's name" required></input>
			<!--<input id="eventtype" type="text" name="event_type" placeholder="Event's type" required></input> -->
			<select name="event_type" required>
				<option selected disabled>Choose type</option>
				<option value="Politics">Politics</option>
				<option value="Sports">Sports</option>
				<option value="Birthday">Birthday</option>
				<option value="Fun">Fun</option>
				<option value="Academic">Academic</option>
				<option value="Music">Music</option>
				<option value="Cinema">Cinema</option>
				<option value="Culture">Culture</option>
				<option value="Work">Work</option>
				<option value="Other">Other</option>
			</select>
			<input type="text" name="event_place" placeholder="Event location" required></input> <br>
			<?$today = date('Y/m/d');?> 
			<input type="date" name="event_date" title="Date format is YYYY/MM/DD" required pattern='(?:19|20)[0-9]{2}/(?:(?:0[1-9]|1[0-2])/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:30))|(?:(?:0[13578]|1[02])/31))' value="<?=$today?>"></input>
			<input type="time" name="event_start_time" title="Time format is HH:MM" required pattern='(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9])' value="<?=date("h:i")?>"></input> 
			<input type="time" name="event_end_time" title="Time format is HH:MM" required pattern='(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9])' value="<?=date("h:i")?>"></input><br>
			<textarea id="eventdes" rows="4" cols="50" name="event_description" placeholder="Event's description"></textarea> <br>
			<input type="radio" name="private" value="true" checked="checked">Private
			<input type="radio" name="private" value="false">Public <br>
			<input type="file" name="fileToUpload" id="fileToUpload"> <br>
			<input type="submit" name= "create" value="Create Event!"> 
		</fieldset>
	</form>
</div>
 </div>
  </div>
