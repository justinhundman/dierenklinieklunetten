<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico"> 
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">

    <!-- /build -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,800' rel='stylesheet' type='text/css'>
    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >

<div class="menubalk-top">
  
  <div class="Bot-Nav">
	<div class="u-gridContainer">
		<div class="Nav-toggle u-cf">
			<a class="Navigation-menuToggle" id="js-navCollapse">
				<svg class="Icon Icon--inline" viewBox="0 0 128 128">
					<use xlink:href="#icon-menu2"></use>
				</svg>
			</a>
		</div>

		<?php include 'includes/navigation.php'; ?>
		
		<div class="Mob-contact-ico">
			<a class="Button Button--transparent u-textInverted u-noLine telsvg" href="tel:030 - 289 89 39">
				<svg class="Icon Icon--inline" viewBox="0 0 128 128">
					<use xlink:href="#icon-phone"></use>
				</svg>
			</a>
		
                <a class="Button Button--transparent u-textInverted u-noLine mailsvg" href="mailto:info@dierenklinieklunetten.nl">
				<svg class="Icon Icon--inline" viewBox="0 0 128 128">
					<use xlink:href="#icon-envelope"></use>
				</svg>
			</a>
		</div><!-- header-contact -->
	</div>
  </div>
</div>
<div class="submenubalk-top">
    <a href="#"></a>
</div> 
    <div class="u-gridContainer">
        <div class="u-gridRow hometitel">
            <div class="u-gridCol3">
                <a href="/home">
                    <div class="logo">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"> 
                    </div>  
                </a>
            </div>
            <div class="u-gridCol6 headerwelkom">
                <div class="social">
                    <a href="https://www.facebook.com/dierenkliniek.lunetten?fref=ts" target="_blank">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.png"> 
                    </a>
                    <a href="https://twitter.com/dkllunetten" target="_blank">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter.png"> 
                    </a>  
                    <a href="/app">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/google.png"> 
                    </a>
                </div>   
                    <div class="welkom">
                        <h3>Welkom bij Dierenklinkiek Lunetten!</h3>
                    </div>
            </div>
            <div class="u-gridCol3 headertel">
                <div>
                    <img class="leerbedrijf" src="<?php echo get_stylesheet_directory_uri(); ?>/img/leerbedrijf.png">
                    <h3><img class="phoneicon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/phone.png">
                    030 2898939</h3>
                </div>
                <p>In geval van spoed bel:<br>
                Tijdens openingstijden: <b>030-2898939</b><br>
                Buiten openingstijden: <b>0900-2223000</b><br>
                <a href="#">Wat is een spoedgeval?</a></p>
            </div>
        </div>
    </div>