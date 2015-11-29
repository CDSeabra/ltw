  <div class="event">
    <?php foreach( $result as $row) { ?>
		<div class="single-event">
			<h3>Nome do evento: <?= $row['name'] ?></h3>
			<p class="type">Tipo: <?=$row['tipo']?></p>
			<? $image_name = getImage($row['id_event']); ?>
			<img src="images/<?="$image_name"?>" alt="Foto do Evento">
			<p>Descrição: <?=$row['description']?></p>
			<p>Data: <?=$row['dat']?></p>
			<p>Privacidade: <?=$row['privado']?></p>
			
			<ul>
			  <li><a href="">Aderir</a></li>
			  <li><a href="">Comentários</a></li>
			  <li><a href="">Partilhar</a></li>
			</ul>
		</div>
	<?php } ?>    
  </div>
  </div>
  </div>
