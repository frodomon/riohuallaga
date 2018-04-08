<?php get_header(); ?>
<section id="main">
		<ul class="slides">
      <li class="slide" style="background:url('<?php print IMAGES."/home.jpg" ?>') no-repeat center center; background-size:cover;"></li>
      <li class="slide" style="background:url('<?php print IMAGES."/turismo.jpg" ?>') no-repeat center center; background-size:cover;"></li>
      <li class="slide" style="background:url('<?php print IMAGES."/pacaya samiria 07.jpg" ?>') no-repeat center center; background-size:cover;"></li>
    </ul>
		<div class="reservas reservas2">
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
	<section id="services">
		<div class="row no-margin">
			<div class="no-padding col-xl-4 col-lg-4 col-md-4 col-12">
				<a href="<?php echo get_page_link( get_page_by_title( 'Eventos' )->ID ); ?>">
					<div class="line events">
						<div class="eventos">
						</div>
						<div class="service-title">EVENTOS</div>
					</div>
				</a>
				<a href="<?php echo get_page_link( get_page_by_title( 'Spa' )->ID ); ?>">
					<div class="line spa">
						<div class="spha">
						</div>
						<div class="service-title">SPA</div>
					</div>
				</a>
			</div>
			<div class="no-padding col-xl-8 col-lg-8 col-md-8 col-12">
				<a href="<?php echo get_page_link( get_page_by_title( 'Restaurante' )->ID ); ?>">
					<div class="doubleline restaurant">
						<div class="restaurante">
						</div>
						<div class="service-title">RESTAURANTE</div>
					</div>
				</a>
				</div>
		</div>
		<div class="row no-margin">
			<div class="no-padding col-xl-6 col-lg-6 col-md-6 col-12">
				<a href="<?php echo get_page_link( get_page_by_title( 'Tours' )->ID ); ?>">
					<div class="doubleline tourism">
						<div class="turismo">
						</div>
						<div class="service-title">TOURS</div>
					</div>
				</a>
			</div>
			<div class="no-padding col-xl-6 col-lg-6 col-md-6 col-12">
				<a href="<?php echo get_page_link( get_page_by_title( 'Habitaciones' )->ID ); ?>">
					<div class="doubleline rooms">
						<div class="habitaciones">
						</div>
						<div class="service-title">HABITACIONES</div>
					</div>
				</a>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
<script type="text/javascript">
  jQuery(window).ready(function(){
    jQuery('#main').flexslider({
      animation: "fade",
      animationLoop: true,
      slideshow: true,
      slideshowSpeed: 7000,
      randomize:false,
      prevText:"",
      nextText:""
    });
  });
</script>
