<?php
/**
 * Template Name: Page - Schedule
 * The template used for displaying page content in page.php
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 1.1
 */
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

		<div class="row">
			<div class="content-full-width content-secondary">
				
				<?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
				<header class="entry-header page-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->
				
				<div class="entry-content">
					<section id="schedule" class="schedule-secondary">
						<h3>Friday, September 25</h3>
						<div class="time"><span class="timestamp">9:00a.m. - Noon</span> <strong>Pre-Conference</strong></div>
						<div class="row track track-blue">
							<span class="anchor" id="blue"></span>
							<div class="col-sm-3 track-speakers">
								Nancy Leigh DeMoss &amp; Trillia&nbsp;Newbell	
							</div>
							<div class="col-sm-6">
								<h4>Blue Track</h4>
								<h5>Speaking&mdash;Speak to Transform Lives</h5>
								<p class="description">If you're interested in teaching or speaking to women, one of your greatest resources can be learning from those who have mined precious truths from God's Word and then labored to share these treasures with others. Join Nancy Leigh DeMoss and Trillia Newbell, along with other seasoned speakers and Bible teachers, for practical wisdom on how to communicate more effectively in your unique setting.</p>
							</div>
							<div class="col-sm-2 track-room">
								TBD
							</div>
						</div>
						<div class="row track track-yellow">
							<span class="anchor" id="yellow"></span>
							<div class="col-sm-3 track-speakers">
								Lauren Chandler, Steve&nbsp;&amp;&nbsp;Vikki&nbsp;Cook
							</div>
							<div class="col-sm-6">
								<h4>Yellow Track</h4>
								<h5>Worship&mdash;Worship to Bless the Lord</h5>
								<p class="description">Who said Sundays were for sleeping in? You're up at the crack of dawn, trying to keep your voice from cracking while rubbing sleep out of the corners your eyes. It's a challenge—in more ways than one. Lauren Chandler, along with Steve and Vikki Cook know that. Come talk with them about everything from why it's so worth the missed sleep . . . to how to make it easier for others to enter into worship . . . to how to worship God yourself while you're frantically trying to get all those accidentals right . . . to how to worship God and not self when the music flows and the people applaud.</p>
							</div>
							<div class="col-sm-2 track-room">
								TBD
							</div>
						</div>	
						<div class="row track track-red">
							<span class="anchor" id="red"></span>
							<div class="col-sm-3 track-speakers">
								Lore Ferguson	
							</div>
							<div class="col-sm-6">
								<h4>Red Track</h4>
								<h5>Writing&mdash;Write to Touch Hearts</h5>
								<p class="description">You've been there. Confused, despairing, afraid . . . until another woman's words infused you with fresh grace and renewed hope. Now it's your turn to grace other women with your words. Come hear why it matters that you write, and how you can write well. Be inspired and helped by women writers like you. Join Lore Ferguson and a panel of talented writers for three solid hours of practical tips . . . and so much more.</p>
							</div>
							<div class="col-sm-2 track-room">
								TBD
							</div>
						</div>
						<div class="row track track-green">
							<span class="anchor" id="green"></span>
							<div class="col-sm-3 track-speakers">
								Logos Rep	
							</div>
							<div class="col-sm-6">
								<h4>Green Track</h4>
								<h5>Logos &mdash; Study to Discover Pure Gold</h5>
								<p class="description">So you have a doctoral level program hanging out on your desktop, but when it comes to knowing how to leverage it, you feel like . . . a preschooler! Well, not for long. It's time to grow up. Bring your laptop and Logos software for three whole hours of hands-on training, and leave feeling like a top-notch Bible study scholar!</p>
							</div>
							<div class="col-sm-2 track-room">
								TBD
							</div>
						</div>
							
							
						<div class="time"><span class="timestamp">12:00 p.m.–2:00 p.m.</span> <strong>Lunch on your own in the area</strong></div>
						<div class="time"><span class="timestamp">2:00 p.m.–4:30 p.m.</span> <strong>Conference Begins / Session I</strong></div>
						<div class="time"><span class="timestamp">4:30 p.m.–6:45 p.m.</span> <strong>Dinner on your own in the area</strong></div>
						<div class="time"><span class="timestamp">6:45 p.m.–9:30 p.m.</span> <strong>Session 2</strong></div>
						<h3>Saturday, September 26</h3>
						<div class="time"><span class="timestamp">8:00 a.m.</span> <strong>Resource Center & Exhibits Open</strong></div>
						<div class="time"><span class="timestamp">8:30 a.m.–12:00 p.m.</span> <strong>Session 3</strong></div>
						<div class="time"><span class="timestamp">12:00 p.m.–1:30 p.m.</span> <strong>Lunch on your own in the area</strong></div>
						<div class="time"><span class="timestamp">1:30 p.m.–4:00 p.m.</span> <strong>Session 4</strong></div>
						<div class="time"><span class="timestamp">4:00 p.m.</span> <strong>Conference ends . . . Go teach!</strong></div>
						
					</section>
				
					<?php the_content(); ?>
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

<?php get_footer(); ?>