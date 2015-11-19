<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favicon.ico"/>
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?> <!-- this tells WordPress that we're about to be at the end of the head tag. And if there's anything that a plugin or theme would like to output in to this area, this is where it should be done. This is very useful for our functions.php file. We have the enqueue_style and enqueue_script functions there. These CSS files that the enqueue_style function is calling are going to be loaded right here where this call is made. -->
	
</head>

<body>
<header>
	<div class="top-bar clearfix">	
		<div class="wrapper">
			<a class="spanish" href="http://www.lacasitacenter.org/es/home.html">En Español</a>
			<a class="facebook" href="https://www.facebook.com/lacasitacenter" target="_blank"></a>
			<a class="twitter" href="https://twitter.com/Centro_casita" target="_blank"></a>
			<div class="search">
				<gcse:search></gcse:search>
				<style scoped>
					.gsc-control-cse {padding: 3px 0 0;}
					.gsc-search-box-tools .gsc-search-box .gsc-input {padding-right: 1px;}
					input.gsc-search-button-v2 {padding: 6px 14px;  margin-top: 3px;}
					.gsc-result .gs-title {height: 1.5em;}
				</style>
			</div>
			<a class="youcan" href="http://www.lacasitacenter.org/get-involved.html">You Can Make a Difference, Too!</a>
		</div>
	</div>
	
  <div class="nav-wrap">
		<div class="menu-icon-bar">MENU</div>
		
		<?php 

      $defaults = array(
        'container' => false,
        'theme_location'  => 'primary-menu',
        'menu_class'  => 'main-nav'
      );

      wp_nav_menu( $defaults );

    ?>
		
		
		<a class="verticalribbon" href="http://www.lacasitacenter.org/sponsor.html">DONATE</a>
  </div>
	
	<div class="banner">
		<div class="wrapper">
			<a href="<?php bloginfo('url'); ?>">
				<img src="img/logo.png" alt="Logo of La Casita Center" id="logo-img">
			</a>
			<h1>Working to enhance the health and well-being of the Hispanic/Latino community</h1>
		</div>
	</div>
</header>