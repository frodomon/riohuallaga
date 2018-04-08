<?php //Template Name: Tours Page
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
		</div>
	</section>
	<section id="servicios">
		<div class="page-content">
			<div class="servicio-title">
				<h1>Paquetes Turisticos</h1>
			</div>
			<div class="servicio-description">
				<p class="no-margin">
					El hotel cuenta con rápidas embarcaciones fluviales equipadas con estrictas normas de seguridad ideal para paseos y transporte por los Río de la Amazonía, acompañado de expertos guías que acompañan con cuentos y leyendas a través de las cálidas aguas del Río Huallaga.
				</p>
			</div>
			<div class="servicios-list">
				<div class="servicio">
					<div class="servicio-thumb">
						<a href="<?php echo get_page_link( get_page_by_title( 'Lago Cuipari' )->ID ); ?>">
							<img src="<?php print IMAGES.'/lago cuipari 00.jpg' ?>" />
						</a>
					</div>
					<div class="servicio-button">
						<a href="<?php echo get_page_link( get_page_by_title( 'Lago Cuipari' )->ID ); ?>">Lago Cuipari - Full Day</a>
					</div>
				</div>
				<div class="servicio">
					<div class="servicio-thumb">
						<a href="<?php echo get_page_link( get_page_by_title( 'Pacaya Samiria 4D/3N' )->ID ); ?>">
							<img src="<?php print IMAGES.'/pacaya samiria 01.jpg' ?>" />
						</a>
					</div>
					<div class="servicio-button">
						<a href="<?php echo get_page_link( get_page_by_title( 'Pacaya Samiria 4D/3N' )->ID ); ?>">Pacaya Samiria 4D/3N</a>
					</div>
				</div>
				<div class="servicio">
					<div class="servicio-thumb">
						<a href="<?php echo get_page_link( get_page_by_title( 'Pacaya Samiria 5D/4N' )->ID ); ?>">
							<img src="<?php print IMAGES.'/pacaya samiria 01.jpg' ?>" />
						</a>
					</div>
					<div class="servicio-button">
						<a href="<?php echo get_page_link( get_page_by_title( 'Pacaya Samiria 5D/4N' )->ID ); ?>">Pacaya Samiria 5D/4N</a>
					</div>
				</div>
				<div class="servicio">
					<div class="servicio-thumb">
						<a href="<?php echo get_page_link( get_page_by_title( 'Pacaya Samiria 6D/5N' )->ID ); ?>">
							<img src="<?php print IMAGES.'/pacaya samiria 01.jpg' ?>" />
						</a>
					</div>
					<div class="servicio-button">
						<a href="<?php echo get_page_link( get_page_by_title( 'Pacaya Samiria 6D/5N' )->ID ); ?>">Pacaya Samiria 6D/5N</a>
					</div>
				</div>
				<div class="servicio">
					<div class="servicio-thumb">
						<a href="<?php echo get_page_link( get_page_by_title( 'Balsapuerto' )->ID ); ?>">
							<img src="<?php print IMAGES.'/balsapuerto 00.jpg' ?>" />
						</a>
					</div>
					<div class="servicio-button">
						<a href="<?php echo get_page_link( get_page_by_title( 'Balsapuerto' )->ID ); ?>">Balsapuerto - Full Day</a>
					</div>
				</div>
				<div class="servicio">
					<div class="servicio-thumb">
						<a href="<?php echo get_page_link( get_page_by_title( 'Río Huallaga' )->ID ); ?>">
							<img src="<?php print IMAGES.'/perezosos.jpg' ?>" />
						</a>
					</div>
					<div class="servicio-button">
						<a href="<?php echo get_page_link( get_page_by_title( 'Río Huallaga' )->ID ); ?>">Paseo por el Río Huallaga</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>