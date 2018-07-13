<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

	</div><!-- #content -->

      <!--footer-->
    <footer class="footer-home">
        <div class="row">
            <div class="col-6 col-sm-3">
                <h3><?php echo get_post_meta($post->ID, 'Listings', true); ?></h3>
                <ul>
                    <li><a href=""><?php echo get_post_meta($post->ID, 'Start', true); ?></a></li>
                    <li><a href=""><?php echo get_post_meta($post->ID, 'Investorsft', true); ?></a></li>
                    <li><a href=""><?php echo get_post_meta($post->ID, 'Incubators', true); ?></a></li>
                    <li><a href=""><?php echo get_post_meta($post->ID, 'People', true); ?></a></li>
                </ul>
            </div>
            <div class="col-6 col-sm-2">
                <h3><?php echo get_post_meta($post->ID, 'Schemes', true); ?></h3>
            </div>
            <div class="col-6 col-sm-2">
                <h3><?php echo get_post_meta($post->ID, 'Events', true); ?></h3>
            </div>
            <div class="col-6 col-sm-2">
                <h3><?php echo get_post_meta($post->ID, 'Help', true); ?></h3>
                <ul>
                    <li><a href=""><?php echo get_post_meta($post->ID, 'FAQs', true); ?></a></li>
                    <li><a href=""><?php echo get_post_meta($post->ID, 'Contact', true); ?></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-3 footer-end row">
                <div class="col-6 col-sm-12 ft-end-left"><img src="<?php bloginfo('template_url') ?>/img/svg/logo-footer.svg" alt=""></div>
                <div class="col-6 col-sm-12 ft-end-right">
                    <ul>
                        <li><?php echo get_post_meta($post->ID, 'Reception', true); ?></li>
                        <li><?php echo get_post_meta($post->ID, 'Solaris', true); ?></li>
                        <li><?php echo get_post_meta($post->ID, 'Fusionopolis', true); ?></li>
                        <li><?php echo get_post_meta($post->ID, 'Singapore', true); ?></li>
                        <br>
                        <li><?php echo get_post_meta($post->ID, 'Tel', true); ?></li>
                        <li><?php echo get_post_meta($post->ID, 'Fax', true); ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy-right">
            <div class="row cp-r-row">
                <div class="col-12 col-sm-4 cp-r-1 row">
                    <div class=" col-4 col-sm-3 cp-r-btn text-center">
                        <a href=""><?php echo get_post_meta($post->ID, 'About', true); ?></a>
                    </div>
                    <div class=" col-4 col-sm-3 cp-r-btn text-center">
                        <a href=""><?php echo get_post_meta($post->ID, 'Policy', true); ?></a>
                    </div>
                    <div class=" col-4 col-sm-6 text-center cp-r-term"> 
                        <a href=""><?php echo get_post_meta($post->ID, 'Terms', true); ?></a>
                    </div>
                </div>
                <div class="col-12 col-sm-4 cp-r-2">
                    <p><?php echo get_post_meta($post->ID, 'cp-right', true); ?></p>
                </div>
                <div class="col-12 col-sm-4 cp-r-3">
                    <p><?php echo get_post_meta($post->ID, 'initiative', true); ?></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    <script>
       $(document).ready(function(){
        $('.btn').click(function(e){
            if ($(e.target).hasClass('btn-active')){
                $(e.target).removeClass('btn-active');
            }
            else{
                $(e.target).addClass('btn-active');
            }
        });
        $('#navbar-icon-1').click(function(){
            $('#navbar-icon-1').addClass('dis-none');
            $('#navbar-icon-2').addClass('dis-block');
        });
        $('#navbar-icon-2').click(function(){
            $('#navbar-icon-1').removeClass('dis-none');
            $('#navbar-icon-2').removeClass('dis-block');
        });
       });
    </script>
  </body>
</html>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
