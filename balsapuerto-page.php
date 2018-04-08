<?php //Template Name: Balsapuerto Page
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
			<h1>Balsapuerto - Full Day</h1>
		</div>
		<div class="paquete">
			<div class="paquete-description group">
				<div class="paquete-thumb">
					<img src="<?php print IMAGES.'/balsapuerto 02.jpg' ?>" />
				</div>
				<div class="paquete-content">
					<div class="paquete-resume">
						<p>
							Ubicado 45 km, al sur este de Yurimaguas 1.30horas e deslizador, es una comunidad de aproximadamente 100 habitantes sobre el cual se extiende un hermoso lago cubierto de plantas acuáticas. 
						</p>
					</div>
					<div class="paquete-duration">
					</div>
				</div>
			</div>
			<div class="paquete-title">
				<h2>Itinerario</h2>
			</div>
			<div class="paquete-schedule group">
				<div class="paquete-schedule-thumb">
					<img src="<?php print IMAGES.'/balsapuerto 01.jpg' ?>" />
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
								<td>4:00</td>
								<td>4:30</td>
								<td class="left">Punto de encuentro Hotel Río Huallaga.</td>
							</tr>
							<tr>
								<td>4:30</td>
								<td>7:00</td>
								<td class="left">Salida del paradero hacia la ciudad de Balsapuerto.</td>
							</tr>
							<tr>
								<td>7:00</td>
								<td>7:30</td>
								<td class="left">Llegada al distrito de Balsapuerto / Desayuno.</td>
							</tr>
							<tr>
								<td>7:30</td>
								<td>8:40</td>
								<td class="left">Encaminamos hacia el pueblo “Nueva Luz”.</td>
							</tr>
							<tr>
								<td>8:40</td>
								<td>9:00</td>
								<td class="left">Llegada a la comunidad “shawi”.</td>
							</tr>
							<tr>
								<td>9:00</td>
								<td>10:00</td>
								<td class="left">Nos dirigimos al río “Cachiyacu” (breve descanso para hidratarnos)</td>
							</tr>
							<tr>
								<td>10:00</td>
								<td>10:10</td>
								<td class="left">Llegada al Río Cachiyacu y continuamos con nuestro recorrido.</td>
							</tr>
							<tr>
								<td>10:10</td>
								<td>12:00</td>
								<td class="left">Partinos al pueblo “Puerto libre” </td>
							</tr>
							<tr>
								<td>12:00</td>
								<td>12:30</td>
								<td class="left">Arrivo a la piedra Sagrada del dios de Kumpanamá.</td>
							</tr>
							<tr>
								<td>12:30</td>
								<td>13:00</td>
								<td class="left">Rumbo a la cascada Velo de Novia </td>
							</tr>
							<tr>
								<td>13:00</td>
								<td>15:00</td>
								<td class="left">Retorno al distrito de Balsapuerto.</td>
							</tr>
							<tr>
								<td>15:00</td>
								<td>16:00</td>
								<td class="left">Almuerzo en la casa de don “Pepe” </td>
							</tr>
							<tr>
								<td>16:00</td>
								<td>18:15</td>
								<td class="left">Retorno a la ciudad de Yurimaguas</td>
							</tr>
							<tr>
								<td>18:15</td>
								<td></td>
								<td class="left">Llegada al Hotel Río Huallaga</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="paquete-info group">
				<div class="observations">
					<h2 class="subtitle">Observaciones</h2>
					<p>Incluye:
					<ul class="lista">
						<li>Traslado ida y vuelta (Tarapoto – Yurimaguas – Balsapuerto / Balsapuerto – Yurimaguas - Tarapoto).</li>
						<li>Alojamiento</li>
						<li>3 botellas de agua por persona</li>
						<li>Fruta</li>
						<li>Galletas</li>
						<li>Botas de jebe</li>
						<li>Soga de 10 metros</li>
						<li>Silvato</li>
						<li>Linternas</li>
						<li>Botiquin de primeros auxilios</li>
					</ul>
				</div>
				<div class="recommendations">
					<h2 class="subtitle">Recomendaciones</h2>
					<ul class="lista">
						<li>Llevar camisa manga larga, pantalones jean y zapatillas de trekking</li>
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