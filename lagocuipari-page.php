<?php //Template Name: Lago Cuipari Page
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
				<h1>Lago Cuipari</h1>
			</div>
			<div class="paquete">
				<div class="paquete-description group">
					<div class="paquete-thumb">
						<img src="<?php print IMAGES.'/lago cuipari 01.jpg' ?>" />
					</div>
					<div class="paquete-content">
						<div class="paquete-resume">
							<p>
								Ubicado 45 km, al sur este de Yurimaguas 1.30 horas en deslizador, es una comunidad de aproximadamente 100 habitantes sobre el cual se extiende un hermoso lago cubierto de plantas acuáticas. 
							</p>
						</div>
						<div class="paquete-duration">
						</div>
					</div>
				</div>
				<div class="paquete-title">
					<h2 class="subtitle">Itinerario</h2>
				</div>
				<div class="paquete-schedule group">
					<div class="paquete-schedule-thumb">
						<img src="<?php print IMAGES.'/lago cuipari 02.jpg' ?>" />
					</div>
					<div class="paquete-schedule-program">
						<table class="schedule">
							<thead>
								<tr>
									<th>H. Ini.</th>
									<th>H. Fin.</th>
									<th>Actividad</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>8:00</td>
									<td>8:15</td>
									<td class="left">Recepción y bienvenida en el Hotel Río Huallaga</td>
								</tr>
								<tr>
									<td>8:15</td>
									<td>8:30</td>
									<td class="left">Traslado hacia el puerto Garcilaso</td>
								</tr>
								<tr>
									<td>8:30</td>
									<td>9:20</td>
									<td class="left">Partida hacia el "Lago Cuipari" en un bote rápido</td>
								</tr>
								<tr>
									<td>9:20</td>
									<td>9:35</td>
									<td class="left">Llegada al caserío Libertad de Cuiparillo</td>
								</tr>
								<tr>
									<td>9:35</td>
									<td>10:10</td>
									<td class="left">Traslado en moto furgón hacia el Lago Cuipari</td>
								</tr>
								<tr>
									<td>10:10</td>
									<td>10:30</td>
									<td class="left">Llegada al pueblo LAGO CUPARI</td>
								</tr>
								<tr>
									<td>10:30</td>
									<td>13:00</td>
									<td class="left">Excursión en canoa, por el bosque, conociendo variedades de flora, así como se podrá apreciar variedades de aves: garzas, pájaro carpintero, loritos, pucacunga, tuki tuki, etc.</td>
								</tr>
								<tr>
									<td>13:00</td>
									<td>14:00</td>
									<td class="left">Se desarrollará actividades de pesca y natación.</td>
								</tr>
								<tr>
									<td>14:00</td>
									<td>16:30</td>
									<td class="left">Almuerzo regional</td>
								</tr>
								<tr>
									<td>16:30</td>
									<td>17:50</td>
									<td class="left">Regreso al caserío libertad de Cuiparillo y traslado a Yurimaguas</td>
								</tr>
								<tr>
									<td>17:50</td>
									<td></td>
									<td class="left">Llegada a la ciudad de Yurimaguas</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="paquete-info group">
					<div class="observations">
						<h2 class="subtitle">Observaciones</h2>
						<p>Incluye:</p>
						<ul class="lista">
							<li>Traslado ida y vuelta, paseo en canoa por el lago</li>
							<li>Almuerzo regional</li>
							<li>Equipo de pesca urbano</li>
							<li>Agua o gaseosa de cortesía</li>
							<li>Visita al "Templo de los Renacos"</li>
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