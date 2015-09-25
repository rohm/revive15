<?php
/**
 * Template Name: Page - live stream
 * The template used for displaying page content in page.php
 *
 * @author Bryan VanHaitsma | https://www.reviveourhearts.com
 * @package upBootWP 1.1
 */
get_header('live'); ?>

<?php while (have_posts()) : the_post(); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="content-full-width content-secondary">
				
				<?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
				<header class="entry-header page-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<nav>
						
							<?php

						echo '<a class="schedule" href="#schedule"><i class="fa fa-list"></i> ', (is_page('envivo') ? 'Programa/Horario' : 'Schedule'), '</a>';
						echo ' | ';
						echo '<a href="', (is_page('envivo') ? '/live/' : '/envivo/') ,'"><i class="fa fa-globe"></i> ', (is_page('envivo') ? 'English' : 'Español'), '</a>';
						

						/* comment out until stream set live
						
								if (is_page('envivo')) {
									echo '<a href="/audio-en-vivo/" class="audio-only"><i class="fa fa-headphones fa-1x"></i> Cambiar a sólo audio</a>';
								}
								else {
									echo '<a href="/live-audio/" class="audio-only"><i class="fa fa-headphones fa-1x"></i> Switch to Audio Only</a>';
								}
						*/

							?>
						

							 
					</nav>
				</header><!-- .entry-header -->
				
				<div class="entry-content">
					
					<?php
						
					if ($_COOKIE['live-stream-form-complete']) {
					
						if (is_page('envivo')) {
							include 'spanish-ux.include.php';
						} elseif (is_page('live')) {
							include 'english-ux.include.php';
						} else {
							print "Error: We have a cookie but no page set.";
						}
						
					} else {
							
						if (is_page('envivo')) {
							gravity_form(4, true, true, false, '', true);
						} elseif (is_page('live')) {
							gravity_form(3, true, true, false, '', true);
						} else {
							print "Error: No form selected.";
						}	
						
					}
					
					?>
				
					
					
					<!-- schedule -->
					<p class="credit text-center">
					<?php

						if (is_page('envivo')) {
							
							//echo 'Transmisión EN VIVO provista por <a href="http://www.misionvirtual.org"><img style="width: 200px; height: auto;" src="http://www.misionvirtual.org/images/new_mv.png" alt="Mision Virtual" /></a>
							echo '
							</p>
							<hr>
							';
							echo PostSnippets::getSnippet("liveScheduleSpanish");
						}
						else {
							//echo 'LIVE stream provided by <a href="http://www.misionvirtual.org"><img style="width: 200px; height: auto;" src="http://www.misionvirtual.org/images/new_mv.png" alt="Mision Virtual" /></a>
							echo '
							</p>
							<hr>
							';
							echo PostSnippets::getSnippet("liveScheduleEnglish");
						}

					
					?>
					
					
					<?php endwhile; // end of the loop. ?>
					<?php
						wp_link_pages(array(
							'before' => '<div class="page-links">'.__('Pages:', 'upbootwp'),
							'after'  => '</div>',
						));
					?>
				</div><!-- .entry-content -->
				<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
	
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
<?php get_footer(); ?>