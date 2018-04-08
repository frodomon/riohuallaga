<?php //Template Name: Contact Page
get_header();  ?>
	<section id="contact_us">
	<div class='contact-top'>
		<h1 class='page-title'>Contacto</h1>
		<div id='contact-info' class='group'>
			<div class='contact-left col-xl-4 col-lg-4 col-md-4 col-12'>
				<div class='contact-address group'>
					<div class='contact-content'>
						<p class='negrita padding-abajo'><i class="fa fa-map-marker" aria-hidden="true"></i> Encuéntranos</p>
						<p>Calle Arica Nro. 111</p>
						<p>Yurimaguas</p>
						<p>Loreto, Perú</p>
					</div>
				</div>
			</div>
			<div class='contact-center col-xl-4 col-lg-4 col-md-4 col-12'>
				<div class="contact-phone group">
					<div class='contact-content'>
						<p class="padding-abajo negrita"><i class="fa fa-phone" aria-hidden="true"></i> Llámanos:</p>
						<p><a href="tel:065353951">(065) 353951</a></p>
					</div>
				</div>
			</div>
			<div class='contact-right col-xl-4 col-lg-4 col-md-4 col-12'>
				<div class="contact-email group">	
					<div class='contact-content'>
						<p class="padding-abajo negrita"><i class="fa fa-envelope" aria-hidden="true"></i> Escríbenos:</p>
						<p><a href='mailto:recepcion@hotelriohuallaga.com.pe'>recepcion@hotelriohuallaga.com.pe</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="contact-middle group">
		<div class='gmaps'>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.710174213174!2d-76.10541588479808!3d-5.896275559685297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91b9eaa153c0a8d3%3A0x7936b9ea477bd67d!2sRio+Huallaga+Hotel+*2A+*2A+*2A+*2A+%26+Business+Center!5e0!3m2!1sen!2spe!4v1499002631495" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class='contact-form'>
			<p class="padding-abajo negrita"><i class="fa fa-envelope" aria-hidden="true"></i> Escríbenos:</p>
			<p class="padding-abajo no-margin negrita">Para cualquier consulta que tengas, no dudes en dejarnos un mensaje. Nosotros responderemos en un plazo máximo de 12 horas.</p>
			<?php echo do_shortcode('[contact-form-7 id="5" title="Formulario de contacto"]'); ?>
		</div>
	</div>
	</section>
<?php get_footer(); ?>