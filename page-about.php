<?php
/**
 * Template Name: Full Width Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link type="text/css" href="<?php bloginfo('template_url') ?>/css/main.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php get_header(); ?>



 <section class="section-panel">
       <div class="bg-op">
            
       </div>
        <div class="row row-panel">
            <div class="col-12 col-sm-12 col-lg-7 panel-left">
                    <h2 class="panel-title">
                       <?php echo get_post_meta($post->ID, 'panel-title', true); ?>
                        <span>
                        	<?php echo get_post_meta($post->ID, 'span', true); ?>
                    	</span>
                    </h2>
                    <p class="p-body"><?php echo get_post_meta($post->ID, 'p-body', true); ?></p>
                    
            </div>
        </div>
        <p class="p-bottom"><?php echo get_post_meta($post->ID, 'p-bottom', true); ?></p>
        <div class="browse row">
            <div class="col-6 col-sm-3 browse-looking">
                <?php echo get_post_meta($post->ID, 'browse-looking', true); ?>
            </div>
            <div class="col-6 col-sm-3 browse-investor">
                
                    <select class="select-investor">
                        <option selected><?php echo get_post_meta($post->ID, 'investors', true); ?></option>
                        <option value="volvo"><?php echo get_post_meta($post->ID, 'Volvo', true); ?></option>
                        <option value="fiat"><?php echo get_post_meta($post->ID, 'Fiat', true); ?></option>
                        <option value="audi"><?php echo get_post_meta($post->ID, 'Audi', true); ?></option>
                    </select>
               
            </div>
            <div class="col-12 col-sm-3 browse-funding">
                <span><?php echo get_post_meta($post->ID, 'in', true); ?></span>
                
                    <select class="select-box-funding">
                        <option selected><?php echo get_post_meta($post->ID, 'funding', true); ?></option>
                        <option value="volvo"><?php echo get_post_meta($post->ID, 'Volvo2', true); ?></option>
                        <option value="fiat"><?php echo get_post_meta($post->ID, 'Fiat2', true); ?></option>
                        <option value="audi"><?php echo get_post_meta($post->ID, 'Audi2', true); ?></option>
                    </select>
                
            </div>
            <div class="col-12 col-sm-3 browse-btn">
               <button class="btn claim">
                    <div class="row row-claim ">
                        <div class="col-8 col-sm-12 col-xl-8 claim-left">
                            <?php echo get_post_meta($post->ID, 'Browse', true); ?> <br class="br-claim">
                            <?php echo get_post_meta($post->ID, 'opportunities', true); ?>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 claim-right"><img src="<?php bloginfo('template_url') ?>/img/svg/tail-right.svg" alt=""></div>
                    </div>
                </button>
            </div>
            
        </div>
    </section>
     <section class="birdging">
        <div class="row">
            <div class="col-12 col-sm-6 birdging-left">
                <h1><?php echo get_post_meta($post->ID, 'bird-h1', true); ?></h1>
                <p ><?php echo get_post_meta($post->ID, 'Finding', true); ?> </p>
                <button class="join btn"><?php echo get_post_meta($post->ID, 'community', true); ?> <img src="<?php bloginfo('template_url') ?>/img/svg/tail-right.svg" alt=""></button>
            </div>
            <div class="col-12 col-sm-6 birdging-right"><img class="img-none" src="<?php bloginfo('template_url') ?>/img/png/right_image.png" alt=""></div>
        </div>
    </section>
    <section class="birdging">
        <div class="row">
            <div class="col-12 col-sm-6 birdging-right"><img src="<?php bloginfo('template_url') ?>/img/png/left_image.png" alt=""></div>
            <div class="col-12 col-sm-6 build">
                <h1><?php echo get_post_meta($post->ID, 'confidence', true); ?></h1>
                <p><?php echo get_post_meta($post->ID, 'need', true); ?></p>
            </div>
            
        </div>
    </section>
     <section class="tech">
        <div class="row row-tech">
            <div class="col-4 col-sm-3 tech-left">
                <span class="span-since"><?php echo get_post_meta($post->ID, 'Since', true); ?> 
                <br class="br-tech"> <?php echo get_post_meta($post->ID, 'date', true); ?></span>
                <span class="span-price"><?php echo get_post_meta($post->ID, 'money', true); ?> </span>
                <p><?php echo get_post_meta($post->ID, 'Startups', true); ?></p>
            </div>
            <div class="col-8 col-sm-6 tech-between">
                <p> <?php echo get_post_meta($post->ID, 'multiplier', true); ?></p>
                <h6><?php echo get_post_meta($post->ID, 'understand', true); ?></h6>
            </div>
            <div class="col-12 col-sm-3 tech-right">
                <button class="btn claim">
                    <div class="row row-claim ">
                        <div class="col-8 col-sm-12 col-xl-8 claim-left">
                            <?php echo get_post_meta($post->ID, 'claim', true); ?> 
                            <br class="br-claim"><?php echo get_post_meta($post->ID, 'profile', true); ?> </div>
                        <div class="col-4 col-sm-12 col-xl-4 claim-right"><img src="<?php bloginfo('template_url') ?>/img/svg/tail-right.svg" alt=""></div>
                    </div>
                </button>
            </div>
        </div>
    </section>
    <section class="landscape text-center">
        <h1>  <?php echo get_post_meta($post->ID, 'Investment', true); ?>  
            <span><?php echo get_post_meta($post->ID, 'landscape', true); ?></span>
        </h1>
        <h5><?php echo get_post_meta($post->ID, 'Most', true); ?></h5>
        <img class="img-desktop" src="<?php bloginfo('template_url') ?>/img/png/Investment Landscape_illustrartion.png" alt="">
        <img class="img-mobile" src="<?php bloginfo('template_url') ?>/img/png/Group.png" alt="">
    </section>
    <section class="sector">
        <h2><?php echo get_post_meta($post->ID, 'Browse2', true); ?> 
            <br class="br-sector"> <?php echo get_post_meta($post->ID, 'Industry', true); ?>
        </h2>
        <div class="sector-btn">
            <button class="btn"><?php echo get_post_meta($post->ID, 'Advertising', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Comunication', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Security', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Entertainment', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Events', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Social', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Living', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Tech', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Maritime', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Insurance', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Med', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Bio', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Clean', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Water', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Food', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Retail', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Technology', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Transportation', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Nano', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Manufacturing', true); ?></button>
            <button class="btn btn-active"><?php echo get_post_meta($post->ID, 'Areo', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Estate', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Hospitality', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Legal', true); ?></button>
            <button class="btn"><?php echo get_post_meta($post->ID, 'Business', true); ?></button>
        </div>
    </section>

    <section class="round">
        <h2>Latest <br> <span><?php echo get_post_meta($post->ID, 'Investment2', true); ?>
        </span> 
            <?php echo get_post_meta($post->ID, 'Rounds', true); ?>
        </h2>
        <div class="row row-out">
            <div class="col-12 col-sm-6 col-xl-4 list-box">
                <div class="row row-in">
                    <div class="col-2 col-sm-2 box-left">
                        <p> <?php echo get_post_meta($post->ID, '02', true); ?></p>
                        <p class="apr"> <?php echo get_post_meta($post->ID, 'apr', true); ?></p>
                    </div>
                    <div class="col-7 col-sm-7 box-between">
                        <p> <?php echo get_post_meta($post->ID, 'vaniday', true); ?></p>
                        <small> <?php echo get_post_meta($post->ID, 'series', true); ?></small>
                        <small> <?php echo get_post_meta($post->ID, 'inver', true); ?></small>
                    </div>
                    <div class="col-3 col-sm-3 box-right"><img src="<?php bloginfo('template_url') ?>/img/png/Rectangle.png" alt=""></div>

                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-4 list-box">
                <div class="row row-in">
                    <div class="col-2 col-sm-2 box-left">
                        <p> <?php echo get_post_meta($post->ID, '02', true); ?></p>
                        <p class="apr"> <?php echo get_post_meta($post->ID, 'apr', true); ?></p>
                    </div>
                    <div class="col-7 col-sm-7 box-between">
                        <p> <?php echo get_post_meta($post->ID, 'vaniday', true); ?></p>
                        <small> <?php echo get_post_meta($post->ID, 'series', true); ?></small>
                        <small> <?php echo get_post_meta($post->ID, 'inver', true); ?></small>
                    </div>
                    <div class="col-3 col-sm-3 box-right"><img src="<?php bloginfo('template_url') ?>/img/png/Rectangle.png" alt=""></div>

                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-4 list-box">
                <div class="row row-in">
                    <div class="col-2 col-sm-2 box-left">
                        <p> <?php echo get_post_meta($post->ID, '02', true); ?></p>
                        <p class="apr"> <?php echo get_post_meta($post->ID, 'apr', true); ?></p>
                    </div>
                    <div class="col-7 col-sm-7 box-between">
                        <p> <?php echo get_post_meta($post->ID, 'vaniday', true); ?></p>
                        <small> <?php echo get_post_meta($post->ID, 'series', true); ?></small>
                        <small> <?php echo get_post_meta($post->ID, 'inver', true); ?></small>
                    </div>
                    <div class="col-3 col-sm-3 box-right"><img src="<?php bloginfo('template_url') ?>/img/png/Rectangle.png" alt=""></div>

                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-4 list-box">
                <div class="row row-in">
                    <div class="col-2 col-sm-2 box-left">
                        <p> <?php echo get_post_meta($post->ID, '02', true); ?></p>
                        <p class="apr"> <?php echo get_post_meta($post->ID, 'apr', true); ?></p>
                    </div>
                    <div class="col-7 col-sm-7 box-between">
                        <p> <?php echo get_post_meta($post->ID, 'vaniday', true); ?></p>
                        <small> <?php echo get_post_meta($post->ID, 'series', true); ?></small>
                        <small> <?php echo get_post_meta($post->ID, 'inver', true); ?></small>
                    </div>
                    <div class="col-3 col-sm-3 box-right"><img src="<?php bloginfo('template_url') ?>/img/png/Rectangle.png" alt=""></div>

                </div>
            </div><div class="col-12 col-sm-6 col-xl-4 list-box">
                <div class="row row-in">
                    <div class="col-2 col-sm-2 box-left">
                        <p> <?php echo get_post_meta($post->ID, '02', true); ?></p>
                        <p class="apr"> <?php echo get_post_meta($post->ID, 'apr', true); ?></p>
                    </div>
                    <div class="col-7 col-sm-7 box-between">
                        <p> <?php echo get_post_meta($post->ID, 'vaniday', true); ?></p>
                        <small> <?php echo get_post_meta($post->ID, 'series', true); ?></small>
                        <small> <?php echo get_post_meta($post->ID, 'inver', true); ?></small>
                    </div>
                    <div class="col-3 col-sm-3 box-right"><img src="<?php bloginfo('template_url') ?>/img/png/Rectangle.png" alt=""></div>

                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-4 list-box">
                <div class="row row-in">
                    <div class="col-2 col-sm-2 box-left">
                        <p> <?php echo get_post_meta($post->ID, '02', true); ?></p>
                        <p class="apr"> <?php echo get_post_meta($post->ID, 'apr', true); ?></p>
                    </div>
                    <div class="col-7 col-sm-7 box-between">
                        <p> <?php echo get_post_meta($post->ID, 'vaniday', true); ?></p>
                        <small> <?php echo get_post_meta($post->ID, 'series', true); ?></small>
                        <small> <?php echo get_post_meta($post->ID, 'inver', true); ?></small>
                    </div>
                    <div class="col-3 col-sm-3 box-right"><img src="<?php bloginfo('template_url') ?>/img/png/Rectangle.png" alt=""></div>

                </div>
            </div>
        </div>
    </section>

    <section class="vision text-center">
        <h2><?php echo get_post_meta($post->ID, 'Find', true); ?> 
            <span><?php echo get_post_meta($post->ID, 'vision3', true); ?></span>
        </h2>
        <button class="join btn"><?php echo get_post_meta($post->ID, 'community2', true); ?><img src="<?php bloginfo('template_url') ?>/img/svg/tail-right.svg" alt=""></button>
    </section>




<?php get_footer(); ?>