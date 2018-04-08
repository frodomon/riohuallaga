<?php //Template Name: Rio Huallaga Page
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
<section id="paquete">
	<div class="page-content">
		<div class="servicio-title">
			<h1>Paseo por Río Huallaga</h1>
		</div>
		<div class="paquete">
			<div class="paquete-description group">
				<div class="paquete-thumb">
					<img src="<?php print IMAGES.'/perezosos.jpg' ?>" />
				</div>
				<div class="paquete-content">
					<div class="paquete-resume">
						<p>
							Salida del Puerto Garcilaso en bote con motor 15 hp. Se dirigirá al Río Shanusi, para observar la vegetación alrededor del río se tomará un breve descanso en fundo Venecia donde podrá apreciar las plantaciones de Camu Camu, de ahí se dirigirá en bote hacia el Río Paranapura durante el recorrido se podrá  observar diferentes puertos de la ciudad hasta llegar al puerto Garcilaso.
						</p>
					</div>
					<div class="paquete-duration">
						<p>Duración: 2 horas</p>
					</div>
				</div>
			</div>
			<div class="paquete-info group">
				<div class="observations">
					<h2 class="subtitle">Observaciones</h2>
					<p>Incluye:</p>
					<ul class="lista">
						<li>•	Traslado ida y vuelta (Tarapoto – Yurimaguas – Río Huallaga / Rio Huallaga – Yurimaguas – Tarapoto).</li>
						<li>Agua o gaseosa de cortesía</li>
						<li>Un trago exótico de cortesía</li>
						<li>Botiquín de primeros auxilios</li>
					</ul>
				</div>
				<div class="recommendations">
					<h2 class="subtitle">Recomendaciones</h2>
					<ul class="lista">
						<li>Llevar camisa manga larga, pantalones jean yzapatillas</li>
						<li>Llevar poncho plástico para posibles lluvias</li>
						<li>Llevar lentes de sol</li>
						<li>Llevar repelente, bloqueador solar y sombrero o gorra</li>
						<li>Llevar ropa de baño</li>
						<li>Llevar cámara fotográfica</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>