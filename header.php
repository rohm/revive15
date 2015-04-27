<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 1.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Magra:400,700|Merriweather:400,700,700italic,400italic,300,300italic' rel='stylesheet' type='text/css'>
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flipclock.css"> -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.countdown.css"> 


<?php wp_head(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.plugin.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.countdown.min.js"></script>

</head>

<body <?php body_class(); ?>>
	<!-- Go to www.addthis.com/dashboard to customize your tools -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54c711a64ebf6b10" async="async"></script>

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header container" role="banner">

		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<script>
				jQuery(function ($) {
					var austDay = new Date();
					austDay = new Date(austDay.getFullYear() + 1, 1 - 1, -206);
					$('#countdownTimer').countdown({until: austDay, format: 'dHM'});
					$('#year').text(austDay.getFullYear());
				});
			</script>
			<div id="adslice">
				<span class="adslice-text">Registration ends: </span> <div id="countdownTimer"></div> <a class="btn btn-primary btn-sm" href="/register/">Register Now</a>
			</div>
			<!-- < ?php 
				global $countdownTimer; 
				echo 	$countdownTimer; 
			? > --> 
			<div class="container">
				<div class="row">
					<div class="col-md-12">
				        <div class="navbar-header">
				            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
							</button>
				            
				            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"  class="navbar-brand"><?php bloginfo( 'name' ); ?></a>
				            
				        </div>
						
						<?php 
						$args = array('theme_location' => 'primary', 
									  'container_class' => 'navbar-collapse collapse', 
									  'menu_class' => 'nav navbar-nav',
									  'fallback_cb' => '',
			                          'menu_id' => 'main-menu',
			                          'walker' => new Upbootwp_Walker_Nav_Menu()); 
						wp_nav_menu($args);
						?>
					</div><!-- .col-md-12 -->
				</div><!-- row -->
			</div><!-- container -->
		</nav>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
