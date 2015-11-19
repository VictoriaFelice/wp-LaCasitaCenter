<?php
add_theme_support( 'menus' );

function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' 	=> __( 'Primary Menu', 'lacasitacenter' )			
		)
	);

}
add_action( 'init', 'register_theme_menus' );

//Linking CSS files
function wpt_theme_styles() { //wpt_ at the beginning of the function name is for name spacing. This is to help give a unique name to all of our functions, so that they don't get overwritten or conflicted with other plug-ins that are being run that might have a similar function name. In this case, wpt stands for wordpress treehouse. You can come up with your own unique name spacing or beginning part of your functions names for your own themes.
	wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'googlefont_css', 'http://fonts.googleapis.com/css?family=Molengo%7COxygen:700%7COpen+Sans' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'responsive_css', get_template_directory_uri() . '/css/responsive.css' ); //This function is what lets us link to a style sheet for our particular theme. The first parameter is going to be a unique name or handle that we want to identify this particular style sheet that we're linking to. Let's start by linking to the responsive.css file inside our CSS folder. We're going to give this the handle or short name responsive_css. And then the second parameter is a link to this file. The best way to get this link is to use a function called get_template_directory_uri and concatenate on the path to our file.
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' ); //We have to use the add_action function in WordPress to tell WordPress when to call this function to enqueue the styles. In the WordPress world, there's something called wp_enqueue_scripts. Wp_enqueue_scripts is a hook that WordPress has that lets us tell WordPress what style sheets as well as what JavaScript files to load for a given page

//Linking JS files (We're not copying over jQuery library, and the reason is that WordPress ships with jQuery installed and running by default)
function wpt_theme_js() {
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/scripts.js', array('jquery'), '', true ); //Last parameter is set to true to have this output at the bottom of our site
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );

//When you want to use the dollar sign in WordPress, this is not automatically assumed to be working with jQuery. Because WordPress is able to work with more than one JavaScript Framework, it's possible that the dollar sign may be assigned to something else. So, if you're using jQuery you can't just add your jQuery just like this, how you normally would. What we need to do is add a wrapper for something called no conflict jQuery.
//link to the video, explaining what exactly to do (around 7min) https://teamtreehouse.com/library/wordpress-theme-development/working-with-css-and-js-in-wordpress-themes/how-to-link-to-js-from-functionsphp-file#
?>