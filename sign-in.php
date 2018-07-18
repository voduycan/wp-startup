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
    <section class="register">
        <h3>Sign In</h3>
        <form class="needs-validation" novalidate>
            <div class="form-row form-input">
                
                
                <div class="col-12 col-sm-12 my-group">
                    <input type="email" class="form-control" id="validationCustom03" placeholder="your email" required>
                    <label class="input-label" for="validationCustom03"><?php echo get_post_meta($post->ID, 'Email', true) ?></label>
                    <div class="invalid-feedback">
                        <span><img src="./img/svg/Warning.svg" alt=""><?php echo get_post_meta($post->ID, 'email-wn', true) ?></span>
                    </div>
                </div>
                <div class="col-12 col-sm-12 my-group">
                    <input type="password" class="form-control" id="password1" placeholder="your password" required>
                    <label class="input-label" for="password"><?php echo get_post_meta($post->ID, 'Password', true) ?></label>
                    <div class="invalid-feedback">
                        <span><img src="./img/svg/Warning.svg" alt=""><?php echo get_post_meta($post->ID, 'Password-wn', true) ?></span>
                    </div>
                </div>
                
            </div>

            <div class="form-row form-btn">
                <div class="col-6 col-sm-6">
                    <button class="btn btn-already" type="button"><?php echo get_post_meta($post->ID, 'dont', true) ?></button>
                </div>
                <div class="col-6 col-sm-6">
                    <button class="btn btn-sign-up" type="submit"><?php echo get_post_meta($post->ID, 'Sign', true) ?> <img src="./img/svg/tail-right.svg" alt=""></button>
                </div>
            </div>
        </form>
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
                       
                    }, false);
                });

            }, false);
        })();
    </script>
  
<?php wp_footer(); ?>

</body>
</html>
