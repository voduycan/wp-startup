
      <!--footer-->
    <footer class="footer-home">
        <div class="row">
            <div class="col-6 col-sm-3">
                <h3>Listings</h3>
                <ul>
                    <li><a href="">Start Ups</a></li>
                    <li><a href="">Investors</a></li>
                    <li><a href="">Incubators & Accelerators</a></li>
                    <li><a href="">People</a></li>
                </ul>
            </div>
            <div class="col-6 col-sm-2">
                <h3>Schemes</h3>
            </div>
            <div class="col-6 col-sm-2">
                <h3>Events</h3>
            </div>
            <div class="col-6 col-sm-2">
                <h3>Help</h3>
                <ul>
                    <li><a href="">FAQs</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-3 footer-end row">
                <div class="col-6 col-sm-12 ft-end-left"><img src="<?php bloginfo('template_url') ?>/img/svg/logo-footer.svg" alt=""></div>
                <div class="col-6 col-sm-12 ft-end-right">
                    <ul>
                        <li>Main Office & Reception</li>
                        <li>#01-02 South Tower, Solaris,</li>
                        <li>1 Fusionopolis Walk</li>
                        <li>Singapore 138628</li>
                        <br>
                        <li>Tel: +65 6898 1800</li>
                        <li>Fax: +65 6276 9606</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy-right">
            <div class="row cp-r-row">
                <div class="col-12 col-sm-4 cp-r-1 row">
                    <div class=" col-4 col-sm-3 cp-r-btn text-center">
                        <a href="">About</a>
                    </div>
                    <div class=" col-4 col-sm-3 cp-r-btn text-center">
                        <a href="">Policy</a>
                    </div>
                    <div class=" col-4 col-sm-6 text-center cp-r-term"> 
                        <a href="">Terms of Use</a>
                    </div>
                </div>
                <div class="col-12 col-sm-4 cp-r-2">
                    <p>All rights reserved © 2018 StartupSG Network</p>
                </div>
                <div class="col-12 col-sm-4 cp-r-3">
                    <p>An initiative by Enterprise Singapore</p>
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