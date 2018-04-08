<?php //Template Name: Restaurant Page
get_header();  ?>
	<section id="reservas">
		<div class="reservas">
				<h4 class="reservas-title">Reservas</h4>
				<div class="reserva-line group">
					<div class="reserva-left">
						<label class="lbl-reserva">Entrada</label>
						<input class="reserva-input" type="date">
					</div>
					<div class="reserva-right">
						<label class="lbl-reserva">Salida</label>
						<input class="reserva-input" type="date">
					</div>
				</div>
				<div class="reserva-line group">
					<div class="reserva-left">
						<label class="lbl-reserva">Habitaciones</label>
						<input class="reserva-input" type="number" min="0">
					</div>
					<div class="reserva-right">
						<label class="lbl-reserva">Huespedes</label>
						<input class="reserva-input" type="number" min="0">
					</div>
				</div>
				<div class="reserva-line group">
					<input class="submit-reserva" type="submit" value="Realiza la Reserva">
				</div>		
	</section>
	<section id="servicios">
		<div class="page-content">
			<div class="servicio-title">
				<h1>Restaurant</h1>
			</div>
			<div class="servicio-description">
				<p>
					En nuestro restaurante ofrecemos los más exquisitos platos de la cocina regional, peruana y extranjera, a cargo de experimentados conocedores del arte culinario. También podrá disfrutar de tragos nacionales y tragos regionales acompañado de excelente música, y de una vista impresionante del verdor de la naturaleza y el suave pasar del Huallaga.
				</p>
			</div>
			<div class="servicios-list">
				<div class="servicio">
					<div class="servicio-thumb">
						<img src="<?php print IMAGES.'/tacacho con cecina y chorizo.jpg' ?>"  />
					</div>
					<div class="servicio-button">
						<a href="#">Tacacho con Cecina y Chorizo</a>
					</div>
				</div>
				<div class="servicio">
					<div class="servicio-thumb">
						<img src="<?php print IMAGES.'/filetepescado.jpg' ?>" />
					</div>
					<div class="servicio-button">
						<a href="#">Filete de Pescado en salsa Rio Huallaga</a>
					</div>
				</div>
				<div class="servicio">
					<div class="servicio-thumb">
						<img src="<?php print IMAGES.'/Cerdo a la BBQ.jpg' ?>" />
					</div>
					<div class="servicio-button">
						<a href="#">Cerdo a la BBQ</a>
					</div>
				</div>
				<div class="servicio">
					<div class="servicio-thumb">
						<img src="<?php print IMAGES.'/paiche a la plancha.jpg' ?>" />
					</div>
					<div class="servicio-button">
						<a href="#">Paiche a la planca</a>
					</div>
				</div>
				<div class="servicio">
					<div class="servicio-thumb">
						<img src="<?php print IMAGES.'/pescado a la chorrillana.jpg' ?>" />
					</div>
					<div class="servicio-button">
						<a href="#">Pescado a la chorrillana</a>
					</div>
				</div>
				<div class="servicio">
					<div class="servicio-thumb">
						<img src="<?php print IMAGES.'/trio amazonico.jpg' ?>" />
					</div>
					<div class="servicio-button">
						<a href="#">Trío Amazónico</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>