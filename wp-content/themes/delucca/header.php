<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Agência_Delucca
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Icons -->
	<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/ionicons.min.css" rel="stylesheet">
	<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/img/logo/logo-delucca_16.png" rel="icon" size="16x16">
	<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/img/logo/logo-delucca_32.png" rel="icon" size="32x32">
	<!-- BxSlider CSS -->
	<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/jquery.bxslider.css" rel="stylesheet">
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header id="header">
			<div class="header-wrapper">
				<div class="container clearfix">
					<div class="logo-box">
						<a href="<?php echo esc_html(home_url("/")); ?>" title="Home"><img src="<?php bloginfo("stylesheet_directory"); ?>/assets/img/logo/logo-delucca-completo-blue.png" alt="Agência Delucca"></a>
					</div>
					<?php
						// Site main menu 
						$header_menu_args = array(
							"theme_location"	=> "header",
							"menu_class"	=> "nav-links",
							"container"	=> "nav",
							"container_class"	=> "main-nav"
						);
						wp_nav_menu( $header_menu_args );
					?>
				</div>
			</div>
			<div class="mobile-btn-box">
				<button id="js-mobile-btn" class="nav-btn">
					<span></span>
					<span></span>
					<span></span>
				</button>
			</div>
		</header>
