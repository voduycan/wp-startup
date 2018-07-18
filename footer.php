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

		<footer class="footer-home">
        <div class="row">
            <div class="col-6 col-sm-3">
                <h3><?php echo get_post_meta(55, 'Listings', true); ?></h3>
                <ul>
                    <li><a href=""><?php echo get_post_meta(55, 'Start', true); ?></a></li>
                    <li><a href=""><?php echo get_post_meta(55, 'Investorsft', true); ?></a></li>
                    <li><a href=""><?php echo get_post_meta(55, 'Incubators', true); ?></a></li>
                    <li><a href=""><?php echo get_post_meta(55, 'People', true); ?></a></li>
                </ul>
            </div>
            <div class="col-6 col-sm-2">
                <h3><?php echo get_post_meta(55, 'Schemes', true); ?></h3>
            </div>
            <div class="col-6 col-sm-2">
                <h3><?php echo get_post_meta(55, 'Events', true); ?></h3>
            </div>
            <div class="col-6 col-sm-2">
                <h3><?php echo get_post_meta(55, 'Help', true); ?></h3>
                <ul>
                    <li><a href=""><?php echo get_post_meta(55, 'FAQs', true); ?></a></li>
                    <li><a href=""><?php echo get_post_meta(55, 'Contact', true); ?></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-3 footer-end row">
                <div class="col-6 col-sm-12 ft-end-left"><img src="<?php bloginfo('template_url') ?>/img/svg/logo-footer.svg" alt=""></div>
                <div class="col-6 col-sm-12 ft-end-right">
                    <ul>
                        <li><?php echo get_post_meta(55, 'Reception', true); ?></li>
                        <li><?php echo get_post_meta(55, 'Solaris', true); ?></li>
                        <li><?php echo get_post_meta(55, 'Fusionopolis', true); ?></li>
                        <li><?php echo get_post_meta(55, 'Singapore', true); ?></li>
                        <br>
                        <li><?php echo get_post_meta(55, 'Tel', true); ?></li>
                        <li><?php echo get_post_meta(55, 'Fax', true); ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy-right">
            <div class="row cp-r-row">
                <div class="col-12 col-sm-4 cp-r-1 row">
                    <div class=" col-4 col-sm-3 cp-r-btn text-center">
                        <a href="http://localhost/duycan/test-wp/"><?php echo get_post_meta(55, 'About', true); ?></a>
                    </div>
                    <div class=" col-4 col-sm-3 cp-r-btn text-center">
                        <a href="http://localhost/duycan/"><?php echo get_post_meta(55, 'Policy', true); ?></a>
                    </div>
                    <div class=" col-4 col-sm-6 text-center cp-r-term"> 
                        <a href=""><?php echo get_post_meta(55, 'Terms', true); ?></a>
                    </div>
                </div>
                <div class="col-12 col-sm-4 cp-r-2">
                    <p><?php echo get_post_meta(55, 'cp-right', true); ?></p>
                </div>
                <div class="col-12 col-sm-4 cp-r-3">
                    <p><?php echo get_post_meta(55, 'initiative', true); ?></p>
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
<?php wp_footer(); ?>

</body>
</html>
