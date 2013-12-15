<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Pivot
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
</head>
<header class="main-header">
<div class="wrapper">
  <section class="logo-holder">
    <h1><span>.</span>PIV<i class="icon fa-repeat"></i>T</h1>
    </section>
    <nav class="main-nav" role="navigation">
     <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav>
</div>
<!-- /.wrapper -->
</header>
<!-- /.main-header <-->
  <?php get_template_part( 'content', 'hero' ); ?>

