<!doctype html>
<html lang="<?php bloginfo('language'); ?>">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(''); ?></title>
  <meta name="description" content="Hotel Rio Huallaga">
  <meta name="author" content="Ukuku">
  <!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>	
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>
<body>
	<div id='wrap'>
		<header class="group">
			<div class='top-header'>
				<div class="top-left hide-responsive">
				</div>
				<?php $url = home_url( '/' ); ?>
				<div class="header-logo">
					<a href="<?php echo esc_url($url) ?>" class="hide-responsive"><img id="logo-header" src="<?php print IMAGES.'/logo horizontal.png' ?>"></a>
					<a href="<?php echo esc_url($url) ?>" class="show-responsive"><img id="logo-header" src="<?php print IMAGES.'/logo horizontal inv.png' ?>"></a>

				</div>
				<div class="social">
					<a href="https://www.facebook.com/HotelRioHuallagaOficial" target="_blank"><i class="fa fa-facebook-square fa-2x sn_icons" aria-hidden="true"></i></a>
					<a href="https://www.tripadvisor.com/Hotel_Review-g3396866-d3824394-Reviews-Hotel_Rio_Huallaga-Yurimaguas_Loreto_Region.html" target="_blank"><i class="fa fa-tripadvisor  fa-2x sn_icons" aria-hidden="true"></i></a>
				</div>
			</div>
			<menu>
				<?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'sf-menu' )); ?>
			</menu>
			<div class="togglemenu">
	      <button class="togglebar" href="#" title="Menu"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></button>
	    </div>	
			<div class="responsive-menu">
			    <menu>
						<?php wp_nav_menu( array( 'theme_location' => 'primary mobile', 'menu_class' => 'toggle-menu' ) ); ?>
					</menu>
		  </div>	
		</header>