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
?>
<?php include "header-sup.php"; ?>
    <section class="enter">
        <h3><?php echo get_post_meta($post->ID, 'find-company', true) ?></h3>
        <h5 class="h5-1"><?php echo get_post_meta($post->ID, 'h5-1', true) ?></h5>
        <h5><?php echo get_post_meta($post->ID, 'UEN', true) ?></h5>
        <h6><?php echo get_post_meta($post->ID, 'not-remember', true) ?></h6>
       
        <form autocomplete="off" action="">
            <div class="autocomplete">
                <input id="myInput" type="text" name="myCountry" placeholder="Please enter your UEN">
            </div>
            <button type="submit"><?php echo get_post_meta($post->ID, 'Next', true) ?> <img src="<?php bloginfo('template_url') ?>/img/svg/tail-right.svg" alt=""></button>
        </form>
            
      <div class="warning row" id="warning-error">
      </div>
    </section>

     <?php include "footer-sup.php" ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php bloginfo('template_url') ?>/js/jquery-3.2.1.slim.min.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/popper.min.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>

    <script src="<?php bloginfo('template_url') ?>/js/autocomplete.js"></script>
    
 <?php wp_footer(); ?>

</body>
</html>