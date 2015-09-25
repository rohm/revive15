					<div class="row">
						<div class="col-sm-8">
							<div class="embed-responsive embed-responsive-16by9">
								<?php

										if (is_page('envivo')) {
											?>
											<!-- <iframe src="http://new.livestream.com/accounts/10185548/events/3472918/player?width=640&height=360&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no"> </iframe> -->
											
											<iframe class="embed-responsive-item" width="640" height="360" src="https://www.youtube.com/embed/x1JNjF08BTI" frameborder="0" allowfullscreen></iframe>
											
											
											<?php
										}
										elseif (is_page('live-2')) {
											echo '<iframe width="640" height="360" src="//www.youtube.com/embed/7nW6Xjd5Djw" frameborder="0" allowfullscreen></iframe>';
										}

									?>
							</div>
							
						</div>
						<div class="twitter-stream col-sm-4">
							<a class="twitter-timeline" href="https://twitter.com/hashtag/revive15indy" data-widget-id="639833784079269888" height="470">#revive15indy Tweets</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						
							<a class="btn btn-lg btn-full-width" target="_blank" href="https://www.avivanuestroscorazones.com/donate/">Donaciones</a>
						</div>
						
					</div>
						
					<div class="row">
						<div class="col-sm-8">
							<div class="chat">
						
								<div style='display:none;'>Live Blog Revive '15 (Español)</div><div id='cil-root-stream-7a9feae391' class='cil-root'><span class='cil-config-data' title='{"altcastCode":"7a9feae391","server":"www.coveritlive.com","geometry":{"width":"fit","height":600},"configuration":{"pinsGrowSize":"on","newEntryLocation":"top","commentLocation":"top","replayContentOrder":"chronological","titlePage":"off","skinOverride":"","embedType":"stream","titleImage":""}}'>&nbsp;</span></div><script type='text/javascript'> window.cilAsyncInit = function() { cilEmbedManager.init() }; (function() { if (window.cilVwRand === undefined) { window.cilVwRand = Math.floor(Math.random()*10000000); } var e = document.createElement('script'); e.async = true; var domain = (document.location.protocol == 'http:' || document.location.protocol == 'file:' ) ? 'http://cdnsl.coveritlive.com' : 'https://cdnslssl.coveritlive.com'; e.src = domain + '/vw.js?v=' + window.cilVwRand; e.id = 'cilScript-7a9feae391'; document.getElementById('cil-root-stream-7a9feae391').appendChild(e); }()); </script>
								
							</div>
							
							
						</div>
						<div class="col-sm-4">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="10000">
					      <div class="carousel-inner">
									<?php $mySnippet = PostSnippets::getSnippet("liveSidebarAdsEspanol");
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