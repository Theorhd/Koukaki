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

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <ul id="navBar">
                <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
                <li class="burgerBtn">
                    <button id="menuBurger">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </button>
                </li>
            </ul>
            <div class="menuFullPage">
                <div class="menuLogo">
                    <img id="floatitem" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
                </div>
                <div class="menuItems">
                    <ul>
                        <li class="menuLinkStory"><a id="menuLink" href="#story">Histoire</a></li>
                        <li class="menuLinkPers"><a id="menuLink" href="#characters">Personnages</a></li>
                        <li class="menuLinkPlace"><a id="menuLink" href="#place">Lieu</a></li>
                        <li class="menuLinkStudio"><a id="menuLink" href="#studio">Studio Koukaki</a></li>
                    </ul>
                </div>
                <div class="menuStudio">
                    <p>STUDIO KOUKAKI</p>
                </div>
            </div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
