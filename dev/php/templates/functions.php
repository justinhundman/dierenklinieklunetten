<?php
  //import the default gravityform contact forms
define("GF_THEME_IMPORT_FILE", "includes/gravityforms-contactform.xml");

// Register the sitemap menu
add_action( 'init', 'register_menu_sitemap' );

function register_menu_sitemap(){
	register_nav_menus( array(
		'sitemap' => 'Sitemap'
    ));
}

$initialized = get_option('slate_initialized');
if($initialized == null){
	$initialized = false;
}

if(is_admin() && !$initialized){
	  include_once('includes/initialize_pages.php');
	
	  $siteIniter = new SiteInitializer(
		  "dierenkliniek-lunetten", 
		  "Kampereiland 13-15 3524 CZ Utrecht Utrecht", 
		  "030 - 289 89 39", 
		  "info@dierenklinieklunetten.nl");
	  $siteIniter->initializeAll();
	  add_option('slate_initialized', true);
}


include_once('includes/antispam.php');

?>
