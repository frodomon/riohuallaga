<?php //Template Name: About Us Page
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
	<section id="about_us">
	<div class="about-top group">
		<div class="hotel">
		</div>
		<div class="nosotros">
			<h1 class="page-title">NOSOTROS</h1>
			<p class='about_us_p'>
				Somos catalogados como el mejor y único hotel cuatro estrellas en la ciudad de Yurimaguas con más de 7 años de experiencia, ofrece instalaciones equipadas, con una arquitectura ecológica, ideal tanto para turistas como clientes de negocio.
			</p>
			<p class='about_us_p'>
				Nuestros colaboradores se encuentran debidamente capacitados para brindarles a nuestros clientes expectativos inolvidables. El hotel cuenta con 30 habitaciones (estándar, matrimonial, suite junior, doble y triple), un restaurante que atiende de 7:00 am – 10:00 pm, por otro lado, cuenta con piscina, auditorio y/o sala de conferencia con butacas amobladas para 73 personas, sauna, lavandería y agencia de viaje.
			</p>
			<p class='about_us_p'>
				El hotel está convenientemente ubicado frente al río Huallaga, a una cuadra de la principal plaza de la ciudad y cerca a centros financieros.
			</p>
		</div>		
	</div>
	<div class="about-middle group">
		<div class="mission-vission">	
			<div class="mission">
				<h2 class="page-title">MISIÓN</h2>
				<p class='about_us_p' style="text-align:center;">Brindar el mejor servicio, superando las expectativas de nuestros clientes.</p>
			</div>
			<div class="vision">
				<h2 class="page-title">VISIÓN</h2>
				<p class='about_us_p' style="text-align:center;">Ser reconocidos como el mejor hotel de la región, con la mejor calidad de atención, el mejor personal y lograr que nuestros clientes vivan experiencias inolvidables.</p>
			</div>
		</div>
		<div class="recepcion">
		</div>
	</div>
</section>
<?php get_footer(); ?>