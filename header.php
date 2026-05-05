<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header site-header--burger">
		<nav id="site-navigation" class="main-navigation">

           
            <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            
            <button class="menu-toggle" aria-controls="fullscreen-menu" aria-expanded="false">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>

		</nav><!-- #site-navigation -->

            <div id="fullscreen-menu" class="fullscreen-menu" aria-hidden="true">

               
                <img class="fullscreen-menu__logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_menu.png" alt="<?php bloginfo('name'); ?>">

                <ul class="fullscreen-menu__list">
                    <li><a href="#story">Histoire</a></li>
                    <li><a href="#characters">Personnages</a></li>
                    <li><a href="#place">Lieu</a></li>
                    <li><a href="#studio">Studio Koukaki</a></li>
                </ul>

                <img class="fullscreen-menu__cat fullscreen-menu__cat--purple" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cat_purple.png" alt="">
                <img class="fullscreen-menu__cat fullscreen-menu__cat--black" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cat_black.png" alt="">
                <img class="fullscreen-menu__cat fullscreen-menu__cat--orange" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cat_orange.png" alt="">

                <img class="fullscreen-menu__flower fullscreen-menu__flower--one" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/orchid.png" alt="">
                <img class="fullscreen-menu__flower fullscreen-menu__flower--two" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Sunflower.png" alt="">
                <img class="fullscreen-menu__flower fullscreen-menu__flower--three" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/flower.png" alt="">
                <img class="fullscreen-menu__flower fullscreen-menu__flower--four" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/random_flower.png" alt="">
                <img class="fullscreen-menu__flower fullscreen-menu__flower--five" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Hibiscus.png" alt="">

                <a class="fullscreen-menu__footer-link" href="<?php echo esc_url(home_url('/')); ?>">STUDIO KOUKAKI</a>
            </div>

	</header><!-- #masthead -->
