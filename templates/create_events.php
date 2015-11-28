<div class="event">
    <form id="create_event" action="action_create_events.php" method="post">
		<input type="text" name="event_name" placeholder="Nome do evento"></input>
		<input type="text" name="event_type" placeholder="Tipo do evento"></input>
		<input type="date" name="event_date" value="2015-11-23"></input>
		<textarea rows="4" cols="50" name="event_description" placeholder="Descrição do evento"></textarea>
		<input type="radio" name="private" value="Privado" checked="checked">Privado
		<input type="radio" name="private" value="Público">Público
		<input type="submit" name= "create" value="Create Event!">			
	</form>
</div>
