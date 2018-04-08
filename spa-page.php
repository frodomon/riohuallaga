<?php //Template Name: Spa Page
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
	<section id="eventos">
		<div class="eventos-top group">
			<div class="vapor">
			</div>
			<div class="evento-desc">
				<h1 class="page-title">Spa</h1>
				<p class="no-margin" style="margin-bottom:0.75rem">
					Relájate! Ven y disfruta de nuestros servicios y ofertas en todas las temporadas. Déjate llevar por nuestro sillón de masajes y olvídate del estrés
				</p>
			</div>
		</div>
	</section>
<?php get_footer(); ?>