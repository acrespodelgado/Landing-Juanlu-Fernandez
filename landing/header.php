<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<?php
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	<link href="<?php echo get_site_url();?>/wp-content/themes/understrap/css/hamburgers.min.css" rel="stylesheet">
	<?php wp_head(); ?>
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->


<div id="wrapper-navbar" class="fixed-top transparent">
    <?php if ( ! has_custom_logo() ): ?>
        <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
            <img class="logo logo-text zoom" src="<?php echo get_site_url() . '/img/logo.svg';?>" alt="<?php _e('Logo Juanlu Fernández', 'understrap-master'); ?>">
        </a>
    <?php endif; ?>

    <!-- Hamburger button for mobile -->
    <button class="hamburger hamburger--collapse d-md-none" type="button" id="navToggle">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>

    <!-- Navigation menu -->
    <nav id="main-nav" class="navbar-nav">
        <?php wp_nav_menu(
            array(
                'theme_location'  => 'primary',
                'container_class' => 'nav-content',
                'container_id'    => 'main-menu-container',
                'menu_class'      => 'nav-items',
                'fallback_cb'     => '',
                'menu_id'         => 'main-menu',
                'depth'           => 1,
                'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
            )
        ); ?>
    </nav>
</div>
