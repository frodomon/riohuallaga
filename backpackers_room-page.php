<?php //Template Name: Backpackers Room Page
get_header();  ?>
<section id="room">
	<div class="page-content">
		<div class="servicio-title">
			<h1>Habitación Económica</h1>
		</div>
		<div class="room group">
			<div class="room-thumb">
				<img src="<?php print IMAGES.'/camarotes.jpg' ?>" />
			</div>
			<div class="room-content">
				<div class="room-description">
					<p class="no-margin">
						Camarotes Personales
					</p>
				</div>
				<div class="room-services">
					<p class="no-margin" style="margin-bottom:1rem;">Además cuenta con los siguientes servicios:</p>
					<div class="list-room-services group">
						<img class="icon-room-service" src="<?php print IMAGES.'/cable-tv.png' ?>" />
						<p class="no-margin text-room-service">TV con Cable</p>
					</div>
					<div class="list-room-services group">
						<img class="icon-room-service" src="<?php print IMAGES.'/fan.png' ?>" />
						<p class="no-margin text-room-service">Ventilador</p>
					</div>
					<div class="list-room-services group">
						<img class="icon-room-service" src="<?php print IMAGES.'/toilet.png' ?>" />
						<p class="no-margin text-room-service">Baño</p>
					</div>
					<div class="list-room-services group">
						<img class="icon-room-service" src="<?php print IMAGES.'/lavanderia.png' ?>" />
						<p class="no-margin text-room-service">Lavandería</p>
					</div>
					<div class="list-room-services group">
						<img class="icon-room-service" src="<?php print IMAGES.'/estacionamiento.png' ?>" />
						<p class="no-margin text-room-service">Estacionamiento</p>
					</div>
				</div>
			</div>
		</div>
		<div style="padding: 1rem 5%;">
			<p class="no-margin">Tambien puedes hacer uso de las áreas comunes:</p>
		</div>
		<div class="common-areas group">
			<div class="common-area">
				<div class="common-area-thumb">
					<img src="<?php print IMAGES.'/piscina.jpg' ?>" />
				</div>
				<div class="common-area-button">
					<p class="no-margin">Piscina</p>
				</div>
			</div>
			<div class="common-area">
				<div class="common-area-thumb">
					<img src="<?php print IMAGES.'/restaurante.jpg' ?>" />
				</div>
				<div class="common-area-button">
					<p class="no-margin">Restaurante y Bar</p>
				</div>
			</div>
			<div class="common-area">
				<div class="common-area-thumb">
					<img src="<?php print IMAGES.'/sauna.jpg' ?>" />
				</div>
				<div class="common-area-button">
					<p class="no-margin">Sauna</p>
				</div>
			</div>
			<div class="common-area">
				<div class="common-area-thumb">
					<img src="<?php print IMAGES.'/spa.jpg' ?>" />
				</div>
				<div class="common-area-button">
					<p class="no-margin">Spa</p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>