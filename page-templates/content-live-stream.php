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
						<a class="schedule" href="#schedule">
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
						<i class="pipe">|</i> 
						<?php
								if (is_page('envivo')) {
									echo '<a href="/audio-en-vivo/" class="audio-only"><i class="fa fa-headphones fa-1x"></i> Cambiar a sólo audio</a>';
								}
								else {
									echo '<a href="/live-audio/" class="audio-only"><i class="fa fa-headphones fa-1x"></i> Switch to Audio Only</a>';
								}

							?>
						</a>
						 <i class="pipe">|</i> 
						<?php
								if (is_page('envivo')) {
									echo '<a href="/live/" class="audio-only">Switch to English</a>';
								}
								else {
									echo '<a href="/envivo/" class="audio-only">Cambiar a Spanish</a>';
								}

							?>
						</a>



							 
					</nav>
				</header><!-- .entry-header -->
				
				<div class="entry-content">
					
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

					<div class="row">
						<div class="col-sm-8">
							<div class="embed-responsive embed-responsive-16by9">
								<?php

										if (is_page('live')) {
											echo '<iframe src="http://new.livestream.com/accounts/10185548/events/3472918/player?width=640&height=360&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no"> </iframe>';
										}
										elseif (is_page('live-2')) {
											echo '<iframe width="640" height="360" src="//www.youtube.com/embed/7nW6Xjd5Djw" frameborder="0" allowfullscreen></iframe>';
										}

									?>
							</div>
							<a class="btn btn-lg btn-full-width" href="/donate">Donate Today</a>
						</div>
						<div class="twitter-stream col-sm-4">
							<a class="twitter-timeline" href="https://twitter.com/hashtag/revive15" data-widget-id="639497347576283136">#revive15 Tweets</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>							</div>
					</div>
					<p class="visible-xs text-center"><a href="/envivo/">Listen en Espa&ntilde;ol &rarr;</a></p>	
					<div class="row">
						<div class="col-sm-8">
							<div class="chat">
								<div style='display:none;'>Live Blog Revive &rsquo;15</div><div id='cil-root-f8d0d6b2ff' class='cil-root'><span class='cil-config-data' title='{"altcastCode":"f8d0d6b2ff","server":"www.coveritlive.com","geometry":{"width":"fit","height":650},"configuration":{"newEntryLocation":"bottom","commentLocation":"bottom","replayContentOrder":"chronological","pinsGrowSize":"on","titlePage":"off","skinOverride":"117"}}'>&nbsp;</span></div><script type='text/javascript'>window.cilAsyncInit = function() {cilEmbedManager.init()};(function() {if (window.cilVwRand === undefined) { window.cilVwRand = Math.floor(Math.random()*10000000); }var e = document.createElement('script');e.async = true;var domain = (document.location.protocol == 'http:' || document.location.protocol == 'file:') ? 'http://cdnsl.coveritlive.com' : 'https://cdnslssl.coveritlive.com';e.src = domain + '/vw.js?v=' + window.cilVwRand;e.id = 'cilScript-f8d0d6b2ff';document.getElementById('cil-root-f8d0d6b2ff').appendChild(e);}());</script>
							</div>
						</div>
						<div class="col-sm-4">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="10000">
					      <div class="carousel-inner">
									<?php $mySnippet = PostSnippets::getSnippet("liveSidebarAds");
					echo $mySnippet; ?>
					      </div>
								<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
									<span class="fa fa-chevron-left"></span>
								</a>
								<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
									<span class="fa fa-chevron-right"></span>
								</a>
					    </div>

						</div>
					</div>
					<p class="credit text-center">
					<?php

						if (is_page('envivo')) {
							echo 'Transmisión EN VIVO provista por <a href="http://www.misionvirtual.org"><img style="width: 200px; height: auto;" src="http://www.misionvirtual.org/images/new_mv.png" alt="Mision Virtual" /></a>';
						}
						else {
							echo 'LIVE stream provided by <a href="http://www.misionvirtual.org"><img style="width: 200px; height: auto;" src="http://www.misionvirtual.org/images/new_mv.png" alt="Mision Virtual" /></a>';
						}

					?>
					</p>
					<hr>
					<h2><span class="section-title" id="schedule"></span> LIVE stream Schedule</h2>
					<h3>Thursday, Oct. 9</h3>
					<table class="table table-schedule table-bordered">
						<tbody>
							<tr class="">
								<td class="column-time">6:45 – 9:45 p.m.</td>
								<td class="column-session">Evening Session with Joni Eareckson Tada and Nancy Leigh DeMoss</td>
							</tr>
						</tbody>
					</table>
					<h3>Friday, Oct. 10</h3>
					<table class="table table-schedule table-bordered">
						<tbody>
							<tr class="">
								<td class="column-time">8:30 – 11:45 a.m.</td>
								<td class="column-session">Morning Session with Mary Kassian and Janet Parshall</td>
							</tr>
							<tr>
								<td class="column-time">1:30 – 2:30 p.m.</td>
								<td class="column-session">Breakout Session with Joni Tada (Hymn Sing)</td>

							</tr>
							<tr class="">
								<td class="column-time">3:00 – 4:00 p.m.</td>
								<td class="column-session">Breakout Session with Janet Parshall</td>
							</tr>
							<tr class="">
								<td class="column-time">6:45 – 9:45 p.m.</td>
								<td class="column-session">Evening Session with Chrissy Toledo and Jim Cymbala</td>
							</tr>
						</tbody>
					</table>
					<h3>Saturday, Oct. 11</h3>
					<table class="table table-schedule table-bordered">
						<tbody>
							<tr class="">
								<td class="column-time">8:45 a.m. – 12:00 p.m.</td>
								<td class="column-session">Morning Session with Nancy Leigh DeMoss</td>
							</tr>
						</tbody>
					</table>
										
					
					
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