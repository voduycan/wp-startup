<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->
	<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  </head>
  <body>
      
    <header class="header-home">
        <nav class="navbar navbar-expand-md navbar-light ">
        <a class="navbar-brand" href="#"><img class="logo" src="<?php bloginfo('template_url') ?>/img/svg/StartupSG-Light.svg" alt=""></a>
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" id="navbar-icon-1"></span>
            <span class="navbar-toggler-icon"  id="navbar-icon-2"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            
            <ul class="navbar-nav mt-lg-0 row">
                <li class="nav-item col-md-4 nav-form">
                    <form class="form-inline my-2 my-lg-0">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="search">
                        </div>
                    </form>
                </li>
            
                <div class="col-md-5 col-sm-12 row menu-row">    
                    <li class="nav-item col-sm-12 col-md-3 menu-item">
                        <a class="nav-link" href="#"><?php echo get_post_meta($post->ID, 'Listings', true); ?></a>
                    </li>
                    <li class="nav-item col-sm-12 col-md-3 menu-item">
                        <a class="nav-link" href="#"><?php echo get_post_meta($post->ID, 'Schemes', true); ?></a>
                    </li>
                    <li class="nav-item col-sm-12 col-md-3 menu-item">
                        <a class="nav-link" href="#"><?php echo get_post_meta($post->ID, 'Events', true); ?></a>
                    </li>
                    <li class="nav-item col-sm-12 col-md-3 menu-item">
                        <a class="nav-link" href="#"><?php echo get_post_meta($post->ID, 'Help', true); ?></a>
                    </li>
                </div>

                <div class="col-md-3 col-sm-12 row img-btn-row">  
                   
                        <a href=""><span class="icon-stats-bars"></span></a>
                   
                    
                        <a href=""><span class="icon-user"></span></a>
                  
                        <a class="sign-up-btn" href=""><?php echo get_post_meta($post->ID, 'sign', true); ?></a>
                   
                </div>
            </ul>
        </div>
        </nav>
    </header>



	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
