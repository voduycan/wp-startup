<?php
/**
 * Template Name: template2
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
?>


<?php get_header(); ?>



 <section class="section-panel">
       <div class="bg-op">
            
       </div>
        <div class="row row-panel">
            <div class="col-12 col-sm-12 col-lg-7 panel-left">
                    <h2 class="panel-title">
                       <?php echo get_post_meta(55, 'panel-title', true); ?>
                        <span>
                        	<?php echo get_post_meta(55, 'span', true); ?>
                    	</span>
                    </h2>
                    <p class="p-body"><?php echo get_post_meta(55, 'p-body', true); ?></p>
                    
            </div>
        </div>
        <p class="p-bottom"><?php echo get_post_meta(55, 'p-bottom', true); ?></p>
        <div class="browse row">
            <div class="col-6 col-sm-3 browse-looking">
                <?php echo get_post_meta(55, 'browse-looking', true); ?>
            </div>
            <div class="col-6 col-sm-3 browse-investor">
                
                    <select class="select-investor">
                        <option selected><?php echo get_post_meta(55, 'investors', true); ?></option>
                        <option value="volvo"><?php echo get_post_meta(55, 'Volvo', true); ?></option>
                        <option value="fiat"><?php echo get_post_meta(55, 'Fiat', true); ?></option>
                        <option value="audi"><?php echo get_post_meta(55, 'Audi', true); ?></option>
                    </select>
               
            </div>
            <div class="col-12 col-sm-3 browse-funding">
                <span><?php echo get_post_meta(55, 'in', true); ?></span>
                
                    <select class="select-box-funding">
                        <option selected><?php echo get_post_meta(55, 'funding', true); ?></option>
                        <option value="volvo"><?php echo get_post_meta(55, 'Volvo2', true); ?></option>
                        <option value="fiat"><?php echo get_post_meta(55, 'Fiat2', true); ?></option>
                        <option value="audi"><?php echo get_post_meta(55, 'Audi2', true); ?></option>
                    </select>
                
            </div>
            <div class="col-12 col-sm-3 browse-btn">
               <button class="btn claim">
                    <div class="row row-claim ">
                        <div class="col-8 col-sm-12 col-xl-8 claim-left">
                            <?php echo get_post_meta(55, 'Browse', true); ?> <br class="br-claim">
                            <?php echo get_post_meta(55, 'opportunities', true); ?>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 claim-right"><img src="<?php echo get_post_meta(55, 'tall-right', true); ?>" alt=""></div>
                    </div>
                </button>
            </div>
            
        </div>
    </section>
     <section class="birdging">
        <div class="row">
            <div class="col-12 col-sm-6 birdging-left">
                <h1><?php echo get_post_meta(55, 'bird-h1', true); ?></h1>
                <p ><?php echo get_post_meta(55, 'Finding', true); ?> </p>
                <button class="join btn"><?php echo get_post_meta(55, 'community', true); ?> <img src="<?php bloginfo('template_url') ?><?php echo get_post_meta(55, 'tall-right', true); ?>" alt=""></button>
            </div>
            <div class="col-12 col-sm-6 birdging-right"><img class="img-none" src="<?php echo get_post_meta(55, 'right-img', true); ?>" alt=""></div>
        </div>
    </section>
    <section class="birdging">
        <div class="row">
            <div class="col-12 col-sm-6 birdging-right"><img src="<?php echo get_post_meta(55, 'left-img', true); ?>" alt=""></div>
            <div class="col-12 col-sm-6 build">
                <h1><?php echo get_post_meta(55, 'confidence', true); ?></h1>
                <p><?php echo get_post_meta(55, 'need', true); ?></p>
            </div>
            
        </div>
    </section>
     <section class="tech">
        <div class="row row-tech">
            <div class="col-4 col-sm-3 tech-left">
                <span class="span-since"><?php echo get_post_meta(55, 'Since', true); ?> 
                <br class="br-tech"> <?php echo get_post_meta(55, 'date', true); ?></span>
                <span class="span-price"><?php echo get_post_meta(55, 'money', true); ?> </span>
                <p><?php echo get_post_meta(55, 'Startups', true); ?></p>
            </div>
            <div class="col-8 col-sm-6 tech-between">
                <p> <?php echo get_post_meta(55, 'multiplier', true); ?></p>
                <h6><?php echo get_post_meta(55, 'understand', true); ?></h6>
            </div>
            <div class="col-12 col-sm-3 tech-right">
                <button class="btn claim">
                    <div class="row row-claim ">
                        <div class="col-8 col-sm-12 col-xl-8 claim-left">
                            <?php echo get_post_meta(55, 'claim', true); ?> 
                            <br class="br-claim"><?php echo get_post_meta(55, 'profile', true); ?> </div>
                        <div class="col-4 col-sm-12 col-xl-4 claim-right"><img src="<?php bloginfo('template_url') ?><?php echo get_post_meta(55, 'tall-right', true); ?>" alt=""></div>
                    </div>
                </button>
            </div>
        </div>
    </section>
    <section class="landscape text-center">
        <h1>  <?php echo get_post_meta(55, 'Investment', true); ?>  
            <span><?php echo get_post_meta(55, 'landscape', true); ?></span>
        </h1>
        <h5><?php echo get_post_meta(55, 'Most', true); ?></h5>
        <img class="img-desktop" src="<?php echo get_post_meta(55, 'img-landscape', true); ?>" alt="">
        <img class="img-mobile" src="<?php echo get_post_meta(55, 'group', true); ?>" alt="">
    </section>
    <section class="sector">
        <h2><?php echo get_post_meta(55, 'Browse2', true); ?> 
            <br class="br-sector"> <?php echo get_post_meta(55, 'Industry', true); ?>
        </h2>
        <div class="sector-btn">
            <button class="btn"><?php echo get_post_meta(55, 'Advertising', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Comunication', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Security', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Entertainment', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Events', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Social', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Living', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Tech', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Maritime', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Insurance', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Med', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Bio', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Clean', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Water', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Food', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Retail', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Technology', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Transportation', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Nano', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Manufacturing', true); ?></button>
            <button class="btn btn-active"><?php echo get_post_meta(55, 'Areo', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Estate', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Hospitality', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Legal', true); ?></button>
            <button class="btn"><?php echo get_post_meta(55, 'Business', true); ?></button>
        </div>
    </section>

    <section class="round">
        <h2>Latest <br> <span><?php echo get_post_meta(55, 'Investment2', true); ?>
        </span> 
            <?php echo get_post_meta(55, 'Rounds', true); ?>
        </h2>
        <div class="row row-out">
            <div class="col-12 col-sm-6 col-xl-4 list-box">
                <div class="row row-in">
                    <div class="col-2 col-sm-2 box-left">
                        <p> <?php echo get_post_meta(55, '02', true); ?></p>
                        <p class="apr"> <?php echo get_post_meta(55, 'apr', true); ?></p>
                    </div>
                    <div class="col-7 col-sm-7 box-between">
                        <p> <?php echo get_post_meta(55, 'vaniday', true); ?></p>
                        <small> <?php echo get_post_meta(55, 'series', true); ?></small>
                        <small> <?php echo get_post_meta(55, 'inver', true); ?></small>
                    </div>
                    <div class="col-3 col-sm-3 box-right"><img src="<?php echo get_post_meta(55, 'Rectangle', true); ?>" alt=""></div>

                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-4 list-box">
                <div class="row row-in">
                    <div class="col-2 col-sm-2 box-left">
                        <p> <?php echo get_post_meta(55, '02', true); ?></p>
                        <p class="apr"> <?php echo get_post_meta(55, 'apr', true); ?></p>
                    </div>
                    <div class="col-7 col-sm-7 box-between">
                        <p> <?php echo get_post_meta(55, 'vaniday', true); ?></p>
                        <small> <?php echo get_post_meta(55, 'series', true); ?></small>
                        <small> <?php echo get_post_meta(55, 'inver', true); ?></small>
                    </div>
                    <div class="col-3 col-sm-3 box-right"><img src="<?php echo get_post_meta(55, 'Rectangle', true); ?>" alt=""></div>

                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-4 list-box">
                <div class="row row-in">
                    <div class="col-2 col-sm-2 box-left">
                        <p> <?php echo get_post_meta(55, '02', true); ?></p>
                        <p class="apr"> <?php echo get_post_meta(55, 'apr', true); ?></p>
                    </div>
                    <div class="col-7 col-sm-7 box-between">
                        <p> <?php echo get_post_meta(55, 'vaniday', true); ?></p>
                        <small> <?php echo get_post_meta(55, 'series', true); ?></small>
                        <small> <?php echo get_post_meta(55, 'inver', true); ?></small>
                    </div>
                    <div class="col-3 col-sm-3 box-right"><img src="<?php echo get_post_meta(55, 'Rectangle', true); ?>" alt=""></div>

                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-4 list-box">
                <div class="row row-in">
                    <div class="col-2 col-sm-2 box-left">
                        <p> <?php echo get_post_meta(55, '02', true); ?></p>
                        <p class="apr"> <?php echo get_post_meta(55, 'apr', true); ?></p>
                    </div>
                    <div class="col-7 col-sm-7 box-between">
                        <p> <?php echo get_post_meta(55, 'vaniday', true); ?></p>
                        <small> <?php echo get_post_meta(55, 'series', true); ?></small>
                        <small> <?php echo get_post_meta(55, 'inver', true); ?></small>
                    </div>
                    <div class="col-3 col-sm-3 box-right"><img src="<?php echo get_post_meta(55, 'Rectangle', true); ?>" alt=""></div>

                </div>
            </div><div class="col-12 col-sm-6 col-xl-4 list-box">
                <div class="row row-in">
                    <div class="col-2 col-sm-2 box-left">
                        <p> <?php echo get_post_meta(55, '02', true); ?></p>
                        <p class="apr"> <?php echo get_post_meta(55, 'apr', true); ?></p>
                    </div>
                    <div class="col-7 col-sm-7 box-between">
                        <p> <?php echo get_post_meta(55, 'vaniday', true); ?></p>
                        <small> <?php echo get_post_meta(55, 'series', true); ?></small>
                        <small> <?php echo get_post_meta(55, 'inver', true); ?></small>
                    </div>
                    <div class="col-3 col-sm-3 box-right"><img src="<?php echo get_post_meta(55, 'Rectangle', true); ?>" alt=""></div>

                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-4 list-box">
                <div class="row row-in">
                    <div class="col-2 col-sm-2 box-left">
                        <p> <?php echo get_post_meta(55, '02', true); ?></p>
                        <p class="apr"> <?php echo get_post_meta(55, 'apr', true); ?></p>
                    </div>
                    <div class="col-7 col-sm-7 box-between">
                        <p> <?php echo get_post_meta(55, 'vaniday', true); ?></p>
                        <small> <?php echo get_post_meta(55, 'series', true); ?></small>
                        <small> <?php echo get_post_meta(55, 'inver', true); ?></small>
                    </div>
                    <div class="col-3 col-sm-3 box-right"><img src="<?php echo get_post_meta(55, 'Rectangle', true); ?>" alt=""></div>

                </div>
            </div>
        </div>
    </section>

    <section class="vision text-center">
        <h2><?php echo get_post_meta(55, 'Find', true); ?> 
            <span><?php echo get_post_meta(55, 'vision3', true); ?></span>
        </h2>
        <button class="join btn"><?php echo get_post_meta(55, 'community2', true); ?><img src="<?php echo get_post_meta(55, 'tall-right', true); ?>" alt=""></button>
    </section>




<?php get_footer(); ?>