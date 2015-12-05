<div class="event">
    <form id="create_event" action="action_edit_event.php" method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>Edit event:</legend>
			<input type="hidden" name="id_event" value="<?=$event['id_event']?>"></input>
			<input id="eventname" type="text" name="event_name" value="<?=$event['name']?>" required></input>
			<input id="eventtype" type="text" name="event_type" value="<?=$event['tipo']?>" required></input>
			<input type="text" name="event_place" value="<?=$event['place']?>" required></input> <br>
			<input type="date" name="event_date" title="Date format is YYYY/MM/DD" required pattern='(?:19|20)[0-9]{2}/(?:(?:0[1-9]|1[0-2])/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:30))|(?:(?:0[13578]|1[02])/31))' value="<?=$event['dat']?>"></input> <br>
			<input type="time" name="event_start_time" value="<?=$event['time_init']?>"></input> 
			<input type="time" name="event_end_time" value="<?=$event['time_end']?>"></input><br>
			<textarea id="eventdes" rows="4" cols="50" name="event_description"><?=htmlspecialchars($event['description'])?></textarea> <br>
			<?if($event['privado'] = 'true') {?>
			<input type="radio" name="private" value="true" checked="checked">Private
			<input type="radio" name="private" value="false" checked="">Public<br>
			<? } else { ?>
			<input type="radio" name="private" value="true" checked="">Private
			<input type="radio" name="private" value="false" checked="checked">Public <br>
			<? } ?>
			<input type="file" name="fileToUpload" id="fileToUpload"><br>
			<input type="submit" name= "edit" value="Edit Event!">
		</fieldset>
	</form>
</div>
 </div>
  </div>
