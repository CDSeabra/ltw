  <div class="event">
    <?php foreach( $result as $row) { ?>
		<div class="news-item">
			<h3>Nome do evento: <?= $row['name'] ?></h3>
			<p class="introduction">Tipo: <?=$row['tipo']?></p>
			<? $image_name = getImage($row['id_event']); ?>
			<img src="images/<?="$image_name"?>" alt="" width="300" height="200">
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
	<!--<h3>Nome Do Evento</h3>
	<h4>Data</h4>
    <img src="http://ipsumimage.appspot.com/300x200,ff7700" alt="300x200">
    <p class="introduction">Tipo do evento</p>
    <p>Descrição do Evento</p>-->
    
  </div>
