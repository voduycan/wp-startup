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
    
    <section class="company">
        <h3><?php echo get_post_meta($post->ID, 'Company_Profile', true) ?></h3>
        <h5><?php echo get_post_meta($post->ID, 'verify', true) ?></h5>
        <div class="panel panel-default company-panel">
            <div class="panel-body row">
                <div class="col-2 col-sm-2 panel-img">
                    <img src="<?php echo get_post_meta($post->ID, 'Rectangle', true) ?>" alt="">
                </div>
                <div class="col-7 col-sm-7 panel-name">
                        <?php echo get_post_meta($post->ID, 'PTE_LTD', true) ?>
                </div>
                <div class="col-3 col-sm-3 panel-123">
                        <?php echo get_post_meta($post->ID, '1234-567x', true) ?>
                </div>
            </div>
            <div class="panel-body row">
                <div class="col-2 col-sm-2 panel-img">
                    <img src="<?php echo get_post_meta($post->ID, 'Rectangle', true) ?>" alt="">
                </div>
                <div class="col-7 col-sm-7 panel-name">
                     <?php echo get_post_meta($post->ID, 'PTE_LTD', true) ?>
                </div>
                <div class="col-3 col-sm-3 panel-123">
                       <?php echo get_post_meta($post->ID, '1234-567x', true) ?>
                </div>
            </div>
            <div class="panel-body row">
                <div class="col-2 col-sm-2 panel-img">
                    <img src="<?php echo get_post_meta($post->ID, 'Rectangle', true) ?>" alt="">
                </div>
                <div class="col-7 col-sm-7 panel-name">
                       <?php echo get_post_meta($post->ID, 'PTE_LTD', true) ?>
                </div>
                <div class="col-3 col-sm-3 panel-123">
                       <?php echo get_post_meta($post->ID, '1234-567x', true) ?>
                </div>
            </div>
            <div class="panel-body row">
                <div class="col-2 col-sm-2 panel-img">
                    <img src="<?php echo get_post_meta($post->ID, 'Rectangle', true) ?>" alt="">
                </div>
                <div class="col-7 col-sm-7 panel-name">
                       <?php echo get_post_meta($post->ID, 'PTE_LTD', true) ?>
                </div>
                <div class="col-3 col-sm-3 panel-123">
                       <?php echo get_post_meta($post->ID, '1234-567x', true) ?>
                </div>
            </div>
            <div class="panel-body row">
                <div class="col-2 col-sm-2 panel-img">
                    <img src="<?php echo get_post_meta($post->ID, 'Rectangle', true) ?>" alt="">
                </div>
                <div class="col-7 col-sm-7 panel-name">
                       <?php echo get_post_meta($post->ID, 'PTE_LTD', true) ?>
                </div>
                <div class="col-3 col-sm-3 panel-123">
                       <?php echo get_post_meta($post->ID, '1234-567x', true) ?>
                </div>
            </div>
        </div>
        <div class="company-btn row">
                <div class="col-6 col-sm-6">
                    <button class="btn btn-already" type="button">
                        <span class="match"><?php echo get_post_meta($post->ID, 'match', true) ?></span>
                        <span class="above"><?php echo get_post_meta($post->ID, 'above', true) ?></span>
                    </button>
                </div>
                <div class="col-6 col-sm-6">
                    <button class="btn btn-sign-up" type="submit"><?php echo get_post_meta($post->ID, 'btn-verify', true) ?></button>
                </div>
        </div>
    </section>

    <?php include "footer-sup.php" ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php bloginfo('template_url') ?>/js/jquery-3.2.1.slim.min.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/popper.min.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                //var labels = document.getElementsByClassName('input-label');
                // Loop over them and prevent submission
                
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        //var label = form.childNodes;
                        //console.log(label);
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                           // label.classList.add('red-color');
                        } //else {
                            //label.classList.remove('red-color');
                        //}
                        form.classList.add('was-validated');
                        // var myLabel = Array.prototype.filter.call(labels, function(label){
                        //     //label.addEventListener('submit', function(label_event) {
                        //         // if (label.checkValidity() === false) {
                        //         //     label_event.preventDefault();
                        //         //     label_event.stopPropagation();
                        //         // } else
                        //         if (label.checkValidity()) {
                        //             label.classList.remove('red-color');
                        //         } else{
                        //             label.classList.add('red-color');
                        //         }
                                
                        //     //},false);
                        // });
                           
                       
                      
                        
                    }, false);
                });

            }, false);
        })();
    </script>
    <script lang="JavaScript">
        // $(document).load(function(){
        //     if($('#password1').val()===$('#password2').val()){
        //         console.log('cc');

        //     }
        //     else console.log('bld');
        // });
    </script>
<?php wp_footer(); ?>

</body>
</html>
