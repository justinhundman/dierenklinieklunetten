	<div class="Footer">
		<div class="static-hoog-knop">
			<a href="#" class="back-to-top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/v.svg"></a>
		</div>
		<div class="footer-wrapper u-gridContainer">
			<div class="u-gridRow">
				<div class="u-gridCol2 footerres">
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-logo.png" ></a>
				</div>
				<div class="u-gridCol2 footerres">
					<p>CONTACT</p>
					<ul>
						<li>Tijdens openingstijden:</li>
						<li><b>030 - 289 89 39</b></li>
						<li>Buiten openingstijden (spoed):</li>
						<li><b>0900 - 222 3000</b></li>
						<li><b>info@dierenklinieklunetten.nl</b></li>
					</ul>
				</div>
				<div class="u-gridCol2 opening footerres"> 
					<p>OPENINGSTIJDEN</p>
							<table class="opening">
							    <tr>
							        <td width="100%">Maandag</td>
							        <td>10:00 - 19:00</td>
							    </tr>
							    <tr>
							        <td>Dinsdag</td>
							        <td>10:00 - 19:00</td>
							    </tr>
							    <tr>
							        <td>Woensdag</td>
							        <td>10:00 - 19:00</td>
							    </tr>
							    <tr>
							        <td>Donderdag</td>
							        <td>10:00 - 18:00</td>
							    </tr>
							    <tr>
							        <td>Vrijdag</td>
							        <td>10:00 - 19:00</td>
							    </tr>
							</table>
						<ul>
						<li>Alle dagen vanaf 09:00</li>
						<li>telefonisch bereikbaar</li>
						<li>Wij werken volledig op afspraak</li>
						</ul>
				</div>
				<div class="u-gridCol2 links footerres">
					<p>LINKS</p>
					<ul>
						<li><a href="http://www.deblije4voeter.nl" target="_blank"><b>www.deblije4voeter.nl</a></li>
						<li><a href="http://www.hondenuitlaatutrecht.nl" target="_blank">www.hondenuitlaatutrecht.nl</a></li>
						<li><a href="http://www.hodes.eu" target="_blank">www.hodes.eu</a></li>
						<li><a href="www.aequor.nl/leerbedrijven" target="_blank">www.aequor.nl/leerbedrijven</b></a></li>
					</ul>
				</div>
				<div class="u-gridCol2 links footerres">
					<p>BESTELLINGEN</p>
					<ul>
						<li><a href="/bestel-online" target="_blank"><b>Bestelformulier</a></li>
						<li><a href="/spaarkaart" target="_blank">Spaarkaart</b></a></li>
						<a href="http://www.docbooff.nl/?gclid=CNj67t3sgcQCFceWtAodpl0AZQ" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Docbooff.png"></a> 
					</ul>
				</div>
				<div class="u-gridCol2 links footerres">
					<p>SITEMAP</p>
				</div>
			</div>
		</div>  
	</div>  
 
 
	<div class="Socket"> 
		<div class="u-gridContainer">
			<!-- Copyright info -->
			<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
					<a href="http://www.lokaalgevonden.nl" target="_blank">LokaalGevonden</a>
			</p>
		</div>
	</div>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/shop.js"></script>
	
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script> 
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scroll.js"></script>
   
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script> 
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/accordion.js"></script>
  <script src="http://localhost:35729/livereload.js"></script>

  
 
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
