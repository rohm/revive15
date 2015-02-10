<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 1.1
 */

get_header(); ?>

	<div class="container">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
	
				<section class="error-404 not-found" style="padding-top: 0;">
					<header class="page-header">
						<h1 class="page-title"><?php _e( 'Sorry, that page couldn&rsquo;t be found.', 'upbootwp' ); ?></h1>
					</header><!-- .page-header -->
	
					<div class="page-content">
						<p><?php _e( 'Sorry we couldn&rsquo;t find what you were looking for. Here&rsquo;s a list of pages to browse:', 'upbootwp' ); ?></p>
	
						<?php 
						$args = array('theme_location' => 'primary', 
									  'container_class' => 'sitemap', 
									  'menu_class' => 'nav',
									  'fallback_cb' => '',
			                          'menu_id' => 'main-menu',
			                          'walker' => new Upbootwp_Walker_Nav_Menu()); 
						wp_nav_menu($args);
						?>
	
						
	
						
	
					</div><!-- .page-content -->
				</section><!-- .error-404 -->
	
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .container -->
<?php get_footer(); ?>