<?php
/**
 * Template Name: Page - Speakers
 * The template used for displaying page content in page.php
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 1.1
 */
get_header(); ?>
	<div class="container">

				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
						
					<?php if ( have_posts() ) : ?>
						
						<?php while ( have_posts() ) : the_post(); ?>
			
							<?php
								/* Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part('content', get_post_format());
							?>
			
						<?php endwhile; ?>
			
						
			
					
					<?php endif; ?>
						<div class="speaker-bio">
						<div class="speaker-photo"><img class="img-circle img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/speaker-nancy.jpg" alt="Nancy Leigh DeMoss" /></div>
						<div class="bio">
						<h3>Nancy Leigh DeMoss</h3>
						<p class="speaker-url"><a href="http://twitter.com/nancydemoss">@NancyDeMoss</a></p>

						<p>Nancy Leigh DeMoss taught her first Sunday School lesson when she was just eight years old. At 13, she was asked to teach a teacher training class in her church, and beginning at 22, she traveled the country for over a decade teaching the Word to women. For the past fourteen years, she’s taught women each weekday on Revive Our Hearts. Nancy says there’s nothing quite like seeing the Word of God penetrate and transform lives, although she’ll be the first to admit that the process is . . . intense! Come hear from a woman who’s been there and is excited to share with you some of what she’s learned along the way.</p>

						</div>
						</div>
						<div class="speaker-bio">
						<div class="speaker-photo"><img class="img-circle img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/speaker-jen.jpg" alt="Jen Wilkin" /></div>
						<div class="bio">
						<h3>Jen Wilkin</h3>
						<p class="speaker-url"><a href="http://twitter.com/jenniferwilkin">@JenniferWilkin</a></p>

						<p>Jen Wilkin is a speaker, writer, and teacher of women’s Bible studies in Dallas, Texas. She and her family are members of The Village Church where she currently serves on staff. Jen writes and teaches the Flower Mound Women’s Bible Study, a 700-member interdenominational Bible study. Jen’s passion is to see women become articulate, committed followers of Christ, with a clear understanding of why they believe what they believe, grounded in the Word of God.</p>
						<blockquote><p>I love Jen's heart for the Word and am delighted that she will be joining me on the platform for Revive '15—our women's leadership conference—this fall!</p> <cite>—Nancy Leigh DeMoss</cite></blockquote>
						</div>
						</div>
						<div class="speaker-bio">
						<div class="speaker-photo"><img class="img-circle img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/speaker-lauren.jpg" alt="Lauren Chandler" /></div>
						<div class="bio">
						<h3>Lauren Chandler</h3>
						<p class="speaker-url"><a href="http://twitter.com/LaurenChandler">@LaurenChandler</a></p>

						<p>Lauren Chandler is a worship leader of one of the fastest growing churches in America, she’s already garnered a Dove nomination, and her debut album, <em>The Narrow Place</em>, was released in 2012. But if you think life has always been rosy for her, think again. Since 2009, when her pastor husband, Matt, was diagnosed with a malignant brain tumor, she’s traversed surgery, seizures, and chemotherapy. Through it all, her passion to worship Christ has only grown.</p>

						</div>
						</div>
						<div class="speaker-bio">
						<div class="speaker-photo"><img class="img-circle img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/speaker-trillia.jpg" alt="Trillia Newbell" /></div>
						<div class="bio">
						<h3>Trillia Newbell</h3>
						<p class="speaker-url"><a href="http://twitter.com/TrilliaNewbell">@TrilliaNewbell</a></p>

						<p>Trillia Newbell is the author of <em>Fear and Faith: Finding the Peace Your Heart Craves</em> (2015) and <em>United: Captured by God's Vision for Diversity</em>. She has spoken at numerous churches, seminaries, and conferences, including the True Woman Conference, The Gospel Coalition Women's Conference, and Southeastern Theological Seminary. She is the consultant on Women's Initiatives for the Ethics and Religious Liberty Commission for the Southern Baptist Convention. Trillia is married to her best friend, Thern, and they live with their two children near Nashville, TN.</p>

						</div>
						</div>
						<div class="speaker-bio">
						<div class="speaker-photo"><img class="img-circle img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/speaker-lore.jpg" alt="Lore Ferguson" /></div>
						<div class="bio">
						<h3>Lore Ferguson</h3>
						<p class="speaker-url"><a href="http://twitter.com/LoreFerguson">@LoreFerguson</a></p>

						<p>Lore Ferguson writes for <a href="http://sayable.net/">Sayable.net</a>, The Gospel Coalition, Christianity Today, CBMW, and many other publications. After experiencing a prolonged season of doubt and difficulty in her faith, God faithfully and consistently drew her eyes back to His sufficiency and goodness. Lore lives in Dallas, Texas and is an active member at The Village Church.</p>

						</div>
						</div>
						<div class="speaker-bio">
						<div class="speaker-photo"><img class="img-circle img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/speaker-cooks.jpg" alt="Steve &amp; Vikki Cook" /></div>
						<div class="bio">
						<h3>Steve &amp; Vikki Cook</h3>
						<p class="speaker-url"><a href="http://twitter.com/SovGraceMusic">@SovGraceMusic</a></p>

						<p>Steve and Vikki have collaborated in writing worship music for more than twenty-five years. Their songs include “I Will Glory in My Redeemer,” “The Glories of Calvary,” “When You Move,” and “Great Things.” Steve also enjoys equipping other songwriters through classes, seminars, and a songwriting blog. As well as being a featured vocalist, Vikki also enjoys directing school choirs and giving piano and voice lessons. </p>

						</div>
						</div>
						<div class="speaker-bio">
						<div class="speaker-photo"><img class="img-circle img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/speaker-logos.jpg" alt="Logos" /></div>
						<div class="bio">
						<h3>Logos</h3>
						<p class="speaker-url"><a href="http://twitter.com/logos">@Logos</a></p>

						<p>Logos offers the world’s premier Bible study software with more than 150 publishers to make more than 43,000 Bible study resources available to customers around the world. The Logos representative will help the Logos user go deeper in their studies using the Logos tools and features.</p>

						</div>
						</div>
					</main><!-- #main -->
				</div><!-- #primary -->

	</div><!-- .container -->
<?php get_footer(); ?>