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
	<div class="container">
		<div class="row">
			<div class="content-full-width content-secondary">
				
				<?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
				<header class="entry-header page-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->
				
				<div class="entry-content">
					
					<a class="schedule pull-right" href="/schedule">
						<i class="fa fa-list"></i> 
						<?php

							if (is_page('envivo')) {
								echo 'Programa/Horario';
							}
							else {
								echo 'Schedule';
							}

						?>
						
					</a>

					
					<?php
						
					if ($_COOKIE['live-stream-form-complete']) {
					
						if (is_page('envivo')) {
							print "<p>Thank you for registering for the Revive ’15 Live stream. The LIVE stream will begin at 2:00pm ET on Friday September 25.</p><p>We will email you with further LIVE stream updates as we get closer to Revive ’15.</p>";
						} elseif (is_page('live')) {
							print "
<p>Thanks for signing up for the Revive '15 LIVE stream. We are so excited that will be joining us. We will send out further announcements and updates as the date gets closer.</p>

<h3>LIVE Stream Dates and Times:</h3>
<ul>
<li>September 25, 2:00-9:00 EDT</li>
<li>September 26, 8:30-4:00 EDT</li>
</ul>

<h3>What to do Next:</h3>
<p>
Use the tools on this page to share the news about this LIVE stream with your friends.</p>";
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
						
						
					/*
						if ($_COOKIE['form-1-complete'] == 1 && (is_page('live'))) {
								include ('library/inc/_live.php');
							} elseif ($_COOKIE['form-1-complete'] == 1 && (is_page('envivo'))) {
									include ('library/inc/_envivo.php');
							} elseif ( is_page('envivo')) {
									gravity_form(2, true, true, false, '', true, 12);
							} else {
							 		gravity_form(1, true, true, false, '', true, 12);
						}
					*/
						
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