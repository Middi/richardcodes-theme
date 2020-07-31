<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package richardcodes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'vintage-cash-cow'); ?></a>
        
<div class="wrapper">


<header class="main-nav">
  <div class="container">
    <div class="logoNav">
      <a href="<?php echo get_home_url(); ?>">
        <img srcset="
        <?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/nav-logo.png 273w,
        <?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/nav-logo@2x.png 546w
            "
          src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/nav-logo.png"  class="header-logo" alt="Header logo">
      </a>
      <div class="nav-toggle" id="navToggle">
        
        <img id="navClosed" class="navIcon" src="https://www.richardmiddleton.me/wp-content/themes/richardcodes/assets/img/hamburger.svg" alt="hamburger menu">
        <img id="navOpen" class="navIcon hidden" src="https://www.richardmiddleton.me/wp-content/themes/richardcodes/assets/img/close.svg" alt="close hamburger">
      </div>
    </div>
    
    <?php
      wp_nav_menu( array(
        'theme_location'	=> 'header-menu',
        'container'			=> 'nav',
        'container_class'	=> 'nav',
        'container_id'	=> 'nav-menu',
        'menu_class'		=> 'main-nav',
      ));
    ?>
    
  </div>
</header>