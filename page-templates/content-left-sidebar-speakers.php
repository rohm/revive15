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
						<h3><span id="nancy"></span>Nancy Leigh DeMoss</h3>
						<p class="role">Plenary Speaker</p>
						<p class="speaker-url"><a href="http://twitter.com/nancydemoss">@NancyDeMoss</a></p>

						<p>Nancy Leigh DeMoss taught her first Sunday School lesson when she was just eight years old. At 13, she was asked to teach a teacher training class in her church, and beginning at 22, she traveled the country for over a decade teaching the Word to women. For the past fourteen years, she&rsquo;s taught women each weekday on Revive Our Hearts. Nancy says there&rsquo;s nothing quite like seeing the Word of God penetrate and transform lives, although she’ll be the first to admit that the process is . . . intense! Come hear from a woman who&rsquo;s been there and is excited to share with you some of what she&rsquo;s learned along the way.</p>

						</div>
						</div>
						<div class="speaker-bio">
						<div class="speaker-photo"><img class="img-circle img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/speaker-jen.jpg" alt="Jen Wilkin" /></div>
						<div class="bio">
						<h3><span id="jen"></span>Jen Wilkin</h3>
						<p class="role">Plenary Speaker</p>
						<p class="speaker-url"><a href="http://twitter.com/jenniferwilkin">@JenniferWilkin</a></p>

						<p>Jen Wilkin is a speaker, writer, and teacher of women&rsquo;s Bible studies in Dallas, Texas. She and her family are members of The Village Church where she currently serves on staff. Jen writes and teaches the Flower Mound Women&rsquo;s Bible Study, a 700-member interdenominational Bible study. Jen&rsquo;s passion is to see women become articulate, committed followers of Christ, with a clear understanding of why they believe what they believe, grounded in the Word of God.</p>
						<blockquote><p>I love Jen&rsquo;s heart for the Word and am delighted that she will be joining me on the platform for Revive '15—our women's leadership conference—this fall!</p> <cite>—Nancy Leigh DeMoss</cite></blockquote>
						</div>
						</div>
						<div class="speaker-bio">
						<div class="speaker-photo"><img class="img-circle img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/speaker-lauren.jpg" alt="Lauren Chandler" /></div>
						<div class="bio">
						<h3><span id="lauren"></span>Lauren Chandler</h3>
						<p class="role">Worship Leader</p>
						<p class="speaker-url"><a href="http://twitter.com/LaurenChandler">@LaurenChandler</a></p>

						<p>Lauren Chandler is a worship leader of one of the fastest growing churches in America. She&rsquo;s already garnered a Dove nomination, and her debut album, <em>The Narrow Place</em>, was released in 2012. But if you think life has always been rosy for her, think again. Since 2009, when her pastor husband, Matt, was diagnosed with a malignant brain tumor, she&rsquo;s traversed surgery, seizures, and chemotherapy. Through it all, her passion to worship Christ has only grown.</p>

						</div>
						</div>
						<div class="speaker-bio">
						<div class="speaker-photo"><img class="img-circle img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/speaker-trillia.jpg" alt="Trillia Newbell" /></div>
						<div class="bio">
						<h3><span id="trillia"></span>Trillia Newbell</h3>
						<p class="role">Track Speaker</p>
						<p class="speaker-url"><a href="http://twitter.com/TrilliaNewbell">@TrilliaNewbell</a></p>

						<p>Trillia Newbell is the author of <em>Fear and Faith: Finding the Peace Your Heart Craves</em> (2015) and <em>United: Captured by God's Vision for Diversity</em>. She has spoken at numerous churches, seminaries, and conferences, including the True Woman Conference, The Gospel Coalition Women's Conference, and Southeastern Theological Seminary. She is the consultant on Women's Initiatives for the Ethics and Religious Liberty Commission for the Southern Baptist Convention. Trillia is married to her best friend, Thern, and they live with their two children near Nashville, TN.</p>

						</div>
						</div>
						<div class="speaker-bio">
						<div class="speaker-photo"><img class="img-circle img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/speaker-lore.jpg" alt="Lore Ferguson" /></div>
						<div class="bio">
						<h3><span id="lore"></span>Lore Ferguson</h3>
						<p class="role">Track Speaker</p>
						<p class="speaker-url"><a href="http://twitter.com/LoreFerguson">@LoreFerguson</a></p>

						<p>Lore Ferguson writes for <a href="http://sayable.net/">Sayable.net</a>, The Gospel Coalition, Christianity Today, CBMW, and many other publications. After experiencing a prolonged season of doubt and difficulty in her faith, God faithfully and consistently drew her eyes back to His sufficiency and goodness. Lore lives in Dallas, Texas and is an active member at The Village Church.</p>

						</div>
						</div>
						<div class="speaker-bio">
							<div class="speaker-photo"><img class="img-circle img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/speaker-cooks.jpg" alt="Steve &amp; Vikki Cook" /></div>
								<div class="bio">
								<h3><span id="cooks"></span>Steve &amp; Vikki Cook</h3>
								<p class="role">Track Speakers</p>
								<p class="speaker-url"><a href="http://twitter.com/SovGraceMusic">@SovGraceMusic</a></p>

								<p>Steve and Vikki have collaborated in writing worship music for more than twenty-five years. Their songs include &ldquo;I Will Glory in My Redeemer,&rdquo; &ldquo;The Glories of Calvary,&rdquo; &ldquo;When You Move,&rdquo; and &ldquo;Great Things.&rdquo; Steve also enjoys equipping other songwriters through classes, seminars, and a songwriting blog. As well as being a featured vocalist, Vikki also enjoys directing school choirs and giving piano and voice lessons. </p>

							</div>
						</div>
						<div class="speaker-bio">
							<div class="speaker-photo"><img class="img-circle img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/speaker-logos.jpg" alt="Logos" /></div>
								<div class="bio">
								<h3><span id="logos"></span>Logos</h3>
								<p class="role">Track Speaker</p>
								<p class="speaker-url"><a href="http://twitter.com/logos">@Logos</a></p>

								<p>Logos offers the world&rsquo;s premier Bible study software with more than 150 publishers to make more than 43,000 Bible study resources available to customers around the world. The Logos representative will help the Logos user go deeper in their studies using the Logos tools and features.</p>
							</div>
						</div>
						<div class="speaker-bio">
							<div class="speaker-photo"><img class="img-circle img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/speaker-paula.jpg" alt="Paula Hendricks" /></div>
								<div class="bio">
								<h3><span id="paula"></span>Paula Hendricks</h3>
								<p class="speaker-url"><a href="http://twitter.com/PaulaWrites678">@PaulaWrites678</a></p>

								<p>Give Paula Hendricks a microphone and a crowd of hundreds—or even thousands—and she&rsquo;s in her element. She&rsquo;s spoken to children all the way up to senior citizens, everywhere from summer camp to public school to women&rsquo;s events to youth groups—both in the U.S. and internationally. She&rsquo;s served with Revive Our Hearts for over ten years, and she&rsquo;s the author of <a href="http://paulawrites.com/book/"><em>Confessions of a Boy-Crazy Girl: On Her Journey from Neediness to Freedom</em></a>.</p>

							</div>
						</div>
						<div class="speaker-bio">
							<div class="speaker-photo"><img class="img-circle img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/speaker-andrea.jpg" alt="Andrea Griffith" /></div>
								<div class="bio">
								<h3><span id="andrea"></span>Andrea Griffith</h3>
								<p class="speaker-url"><a href="http://twitter.com/Andrea1pt13">@Andrea1pt13</a></p>

								<p>Andrea Griffith&rsquo;s chief desire is to make much of Jesus Christ and the high calling of women as they find their greatest joy and fulfillment in Him. Her husband, Trent, is the senior pastor at Harvest Bible Chapel Granger, Indiana; and they have four children. 
Trent and Andrea speak for Family Life&rsquo;s Weekend to Remember Getaways, and Andrea has also spoken to hundreds of groups of women across the United States.</p>

							</div>
						</div>
						<div class="speaker-bio">
							<div class="speaker-photo"><img class="img-circle img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/speaker-jennifer.jpg" alt="Jennifer Lyell" /></div>
								<div class="bio">
								<h3><span id="andrea"></span>Jennifer Lyell</h3>
								<p class="speaker-url"><a href="http://twitter.com/JenniferLyell">@JenniferLyell
</a></p>

								<p>Jennifer Lyell serves as Vice President of Trade Book Publishing for the trade publishing division of LifeWay Christian Resources. The 200+ titles that Jennifer has acquired, developed, or managed include New York Times Bestsellers, The Resolution for Women, The Vow, Wisdom of Faith, Reshaping It All, Balancing It All, and key brands such as She Reads Truth. She is passionate about biblical fidelity and substantive content. 
</p>

							</div>
						</div>
						<div class="speaker-bio">
							<div class="speaker-photo"><img class="img-circle img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/speaker-erin.jpg" alt="Erin Davis" /></div>
								<div class="bio">
								<h3><span id="andrea"></span>Erin Davis</h3>
								<p class="speaker-url"><a href="http://twitter.com/ErinGraffiti">@ErinGraffiti</a></p>

								<p>Erin Davis addresses women of all ages nationwide as a speaker, author, and blogger, and is passionately committed to sharing God&rsquo;s Truth with others. She is a wife and the momma of three adorable boys and the author of many books. When she&rsquo;s not writing books, you can find Erin chasing down chickens and children on her small farm in the Midwest. 
</p>

							</div>
						</div>
					</main><!-- #main -->
				</div><!-- #primary -->

	</div><!-- .container -->
<?php get_footer(); ?>