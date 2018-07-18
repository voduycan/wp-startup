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
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/main.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
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
                        <a class="nav-link" href="http://localhost/duycan/company/"><?php echo get_post_meta(55, 'Listings', true); ?></a>
                    </li>
                    <li class="nav-item col-sm-12 col-md-3 menu-item">
                        <a class="nav-link" href="http://localhost/duycan/find-company/"><?php echo get_post_meta(55, 'Schemes', true); ?></a>
                    </li>
                    <li class="nav-item col-sm-12 col-md-3 menu-item">
                        <a class="nav-link" href="http://localhost/duycan/register/"><?php echo get_post_meta(55, 'Events', true); ?></a>
                    </li>
                    <li class="nav-item col-sm-12 col-md-3 menu-item">
                        <a class="nav-link" href="http://localhost/duycan/sign-in/"><?php echo get_post_meta(55, 'Help', true); ?></a>
                    </li>
                </div>

                <div class="col-md-3 col-sm-12 row img-btn-row">  
                   
                        <a href=""><span class="icon-stats-bars"></span></a>
                   
                    
                        <a href=""><span class="icon-user"></span></a>
                  
                        <a class="sign-up-btn" href="http://localhost/duycan/sign-in/"><?php echo get_post_meta(55, 'sign', true); ?></a>
                   
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
