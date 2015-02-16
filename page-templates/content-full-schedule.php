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
	<div class="container">
		<div class="row">
			<div class="content-full-width content-secondary">
				
				<?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
				<header class="entry-header page-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->
				
				<div class="entry-content">
					<section id="schedule">
						<table class="table table-schedule" width="100%" cellspacing="0">
							<tbody>
								<tr>
									<th colspan="3" scope="col">
										<h3>Friday, September 25</h3>
									</th>
								</tr>
								<tr>
									<td colspan="3" scope="col">9:00am - Noon Pre-Conference</td>
								</tr>
								<tr>
									<th class="speaker" scope="col">Speaker</th>
									<th class="description" scope="col">Description</th>
									<th class="room" scope="col">Room</th>
								</tr>
								<tr class="blue">
									<td class="speaker" scope="col">Nancy&nbsp;Leigh&nbsp;DeMoss &amp; 
								Trillia&nbsp;Newbell</td>
									<td class="description" scope="col"><h4>Blue Track: Speaking—Speak to Transform Lives</h4> 
									<br>If you're interested in teaching or speaking to women, one of your greatest resources can be learning from those who have mined precious truths from God's Word and then labored to share these treasures with others. Join Nancy Leigh DeMoss and Trillia Newbell, along with other seasoned speakers and Bible teachers, for practical wisdom on how to communicate more effectively in your unique setting.</td>
									<td class="room" scope="col">TBD</td>
								</tr>
								<tr class="yellow">
								<td class="speaker" scope="col">Lauren Chandler <br></br>
								Steve and Vikki Cook</td>
								<td class="description" scope="col"><h4>Yellow Track: Worship—Worship to Bless the Lord </h4> 
								<br>Who said Sundays were for sleeping in? You're up at the crack of dawn, trying to keep your voice from cracking while rubbing sleep out of the corners your eyes. It's a challenge—in more ways than one. Lauren Chandler, along with Steve and Vikki Cook know that. Come talk with them about everything from why it's so worth the missed sleep . . . to how to make it easier for others to enter into worship . . . to how to worship God yourself while you're frantically trying to get all those accidentals right . . . to how to worship God and not self when the music flows and the people applaud.</td>
								<td class="room" scope="col">TBD</td>
								</tr>
								<tr class="red">
								<td class="speaker" scope="col">Lore Ferguson</td>
								<td class="description" scope="col"><h4>Red Track: Writing—Write to Touch Hearts</h4> 
								<br>You've been there. Confused, despairing, afraid . . . until another woman's words infused you with fresh grace and renewed hope. Now it's your turn to grace other women with your words. Come hear why it matters that you write, and how you can write well. Be inspired and helped by women writers like you. Join Lore Ferguson and a panel of talented writers for three solid hours of practical tips . . . and so much more.</td>
								<td class="room" scope="col">TBD</td>
								</tr>
								<tr class="green">
								<td class="speaker" scope="col">Logos Rep</td>
								<td class="description" scope="col"><h4>Green Track: Logos–Study to Discover Pure Gold</h4> 
								<br>So you have a doctoral level program hanging out on your desktop, but when it comes to knowing how to leverage it, you feel like . . . a preschooler! Well, not for long. It's time to grow up. Bring your laptop and Logos software for three whole hours of hands-on training, and leave feeling like a top-notch Bible study scholar!</td>
								<td class="room" scope="col">TBD</td>
								</tr>
								<tr>
								<td colspan="3" scope="col">12:00p.m.–2:00 p.m. <strong>Lunch on your own in the area</strong></td>
								</tr>
								<tr>
								<td colspan="3" scope="col">2:00 p.m.–4:30 p.m. <strong>Conference Begins / Session I</strong></td>
								</tr>
								<tr>
								<td colspan="3" scope="col">4:30 p.m.–6:45 p.m. <strong>Dinner on your own in the area</strong></td>
								</tr>
								<tr>
								<td colspan="3" scope="col">6:45 p.m.–9:30 p.m. <strong>Session 2</strong></td>
								</tr>
								<tr>
								<th colspan="3" scope="col">
								<h3>Saturday, September 26</h3>
								</th>
								</tr>
								<tr>
								<td colspan="3" scope="col">8:00 a.m. <strong>Resource Center &amp; Exhibits Open</strong></td>
								</tr>
								<tr>
								<td colspan="3" scope="col">8:30 a.m.–12:00 p.m. <strong>Session 3</strong></td>
								</tr>
								<tr>
								<td colspan="3" scope="col">12:00–1:30 p.m. <strong>Lunch on your own in the area</strong></td>
								</tr>
								<tr>
								<td colspan="3" scope="col">1:30–4:00 <strong>Session 4</strong></td>
								</tr>
								<tr>
								<td colspan="3" scope="col">4:00 <strong>Conference ends . . . Go teach!</strong></td>
								</tr>
							</tbody>
						</table>
					</section>
					<section id="schedule">
						<div class="day" id="friday-schedule" >
							<h3>Friday, September 25</h3>
							<p class="time">9:00am - Noon <strong>Pre-Conference</strong></p>
							<p class="lead">Your voice is necessary for reaching the women in your corner of the world for Christ. That&rsquo;s why we&rsquo;ve designed these tracks—so you might communicate His love and truth to them even more effectively. </p>
							<h4 class="choose">Choose your track:</h4>
							<a class="track track-blue" href="/schedule/#blue">
								<h4>Blue Track</h4>
								<h5>Speak to Transform Lives</h5>
								<p class="speakers">Nancy Leigh DeMoss <span class="amp">&amp;</span> Trillia Newbell</p>
							</a>
							<a class="track track-yellow" href="/schedule/#yellow">
								<h4>Yellow Track</h4>
								<h5>Worship to Bless the Lord</h5>
								<p class="speakers">Lauren Chandler, Steve <span class="amp">&amp;</span> Vicki Cook</p>
							</a>
							<a class="track track-red" href="/schedule/#red">
								<h4>Red Track</h4>
								<h5>Writing—Write to Touch Hearts</h5>
								<p class="speakers">Lore Ferguson</p>
								<div class="btn btn-bordered">Read More</div>
							</a>
							<a class="track track-green" href="/schedule/#green">
								<h4>Green Track</h4>
								<h5>Logos &mdash; Study to Discover Pure Gold</h5>
								<p class="speakers">Logos</p>
							</a>
							<p class="time">2:00pm - 10pm<strong> Revive &rsquo;15 Main Sessions</strong></p>
						</div>
						<hr>
						<div class="day" id="saturday-schedule">
							<h3>Saturday, September 26</h3>
							<p class="time">8:30am - 4:00pm <strong>Revive &rsquo;15 Main Sessions</strong></p>
						</div>
					</div>
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
	</div><!-- .container -->
<?php get_footer(); ?>