<?php //Template Name: Rooms Page
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
				<h1>Habitaciones</h1>
			</div>
			<div class="servicio-description">
				<p>
					El hotel dispone de 30 habitaciones muy cómodas para lograr el máximo descanso de nuestros huéspedes. Desde ellas podrás disfrutar de una maravillosa vista del Río Huallaga.
				</p>
			</div>
			<div class="servicios-list">
				<div class="servicio">
					<div class="servicio-thumb">
						<a href="<?php echo get_page_link( get_page_by_title( 'Habitación Standard' )->ID ); ?>">
							<img src="<?php print IMAGES.'/standard.jpg' ?>" />
						</a>
					</div>
					<div class="servicio-button">
						<a href="<?php echo get_page_link( get_page_by_title( 'Habitación Standard' )->ID ); ?>">Standard</a>
					</div>
				</div>
				<div class="servicio">
					<div class="servicio-thumb">
						<a href="<?php echo get_page_link( get_page_by_title( 'Habitación Matrimonial' )->ID ); ?>">
							<img src="<?php print IMAGES.'/matrimonial.jpg' ?>" />
						</a>
					</div>
					<div class="servicio-button">
						<a href="<?php echo get_page_link( get_page_by_title( 'Habitación Matrimonial' )->ID ); ?>">Matrimonial</a>
					</div>
				</div>
				<div class="servicio">
					<div class="servicio-thumb">
						<a href="<?php echo get_page_link( get_page_by_title( 'Habitación Doble' )->ID ); ?>">
							<img src="<?php print IMAGES.'/doble.jpg' ?>" />
						</a>
					</div>
					<div class="servicio-button">
						<a href="<?php echo get_page_link( get_page_by_title( 'Habitación Doble' )->ID ); ?>">Doble</a>
					</div>
				</div>
				<div class="servicio">
					<div class="servicio-thumb">
						<a href="<?php echo get_page_link( get_page_by_title( 'Habitación Triple' )->ID ); ?>">
							<img src="<?php print IMAGES.'/triple.jpg' ?>" />
						</a>
					</div>
					<div class="servicio-button">
						<a href="<?php echo get_page_link( get_page_by_title( 'Habitación Triple' )->ID ); ?>">Triple</a>
					</div>
				</div>
				<div class="servicio">
					<div class="servicio-thumb">
						<a href="<?php echo get_page_link( get_page_by_title( 'Suite Junior' )->ID ); ?>">
							<img src="<?php print IMAGES.'/suite.jpg' ?>" />
						</a>
					</div>
					<div class="servicio-button">
						<a href="<?php echo get_page_link( get_page_by_title( 'Suite Junior' )->ID ); ?>">Suite Junior</a>
					</div>
				</div>
				<div class="servicio">
					<div class="servicio-thumb">
						<a href="<?php echo get_page_link( get_page_by_title( 'Habitación Económica' )->ID ); ?>">
							<img src="<?php print IMAGES.'/camarotes.jpg' ?>" />
						</a>
					</div>
					<div class="servicio-button">
						<a href="<?php echo get_page_link( get_page_by_title( 'Habitación Económica' )->ID ); ?>">Económicas</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>