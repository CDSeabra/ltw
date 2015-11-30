<div class="event">
    <form id="create_event" action="action_edit_event.php" method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>Edit event:</legend>
			<input type="hidden" name="id_event" value="<?=$event['id_event']?>"></input>
			<input type="text" name="event_name" value="<?=$event['name']?>" required></input>
			<input type="text" name="event_type" value="<?=$event['tipo']?>" required></input>
			<input type="date" name="event_date" value="<?=$event['dat']?>"></input>
			<textarea rows="4" cols="50" name="event_description"><?=htmlspecialchars($event['description'])?></textarea>
			<?if($event['privado'] = 'true') {?>
			<input type="radio" name="private" value="true" checked="checked">Private
			<input type="radio" name="private" value="false" checked="">Public
			<? } else { ?>
			<input type="radio" name="private" value="true" checked="">Private
			<input type="radio" name="private" value="false" checked="checked">Public
			<? } ?>
			<input type="file" name="fileToUpload" id="fileToUpload">
			<input type="submit" name= "edit" value="Edit Event!">
		</fieldset>
	</form>
</div>
 </div>
  </div>
