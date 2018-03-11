<div class="black-bg col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="container">
    <footer class="footer col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <aside class="footer-lt">
          <ul>
			  <li><i class="fa fa-phone"></i> 970-795-2767</li>
			  <li><i class="fa fa-fax"></i> 970-716-1693</li>
            <li><i class="fa fa-envelope"></i><a href="mailto:support@easyauthority.com">support@easyauthority.com</a></li>
          </ul>
          <!--footer-lt--> 
        </aside>
        <!--col--> 
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <aside class="footer-rt">
          <div class="sitemap pull-left">
            <?php
						wp_nav_menu( array( 
							'theme_location' => 'my-custom-menu', 
							'container_class' => 'custom-menu-class-footer' ) ); 
						?>
            <!--sitemap--> 
          </div>
          
          <div class="copyright-area pull-right footerlinks">
            <div class="logo pull-left"><a href="index.html"><img src="/wp-content/themes/easyauthority/images/footer-logo.png" alt="logo" /></a></div>
            <div class="clearfix"></div>
            <p class="footerlinks"> © Copyright 2018, All rights reserved.<br /><a href="/terms-and-conditions/" >Terms and Conditions</a></p>
            <aside class="social-icons pull-left">
              <ul>
                <li><a href="https://www.facebook.com/pg/EasyAuthority/" target="_blank" class="fa fa-facebook"></a></li>
                <li><a href="https://twitter.com/Easy_Authority" target="_blank" class="fa fa-twitter"></a></li>
              </ul>
              <!--social-icons--> 
            </aside>
            <!--copyright-area--> 
          </div>
          <!--footer-rt--> 
        </aside>
        <!--col--> 
      </div>
      <!--footer--> 
    </footer>
    <!--container--> 
  </div>
  <!--black-bg--> 
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="/wp-content/themes/easyauthority/js/jquery-1.12.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="/wp-content/themes/easyauthority/js/bootstrap/bootstrap.js"></script> 
<!-- Form Submission --> 
<script src="/wp-content/themes/easyauthority/js/form-submission/validate.js"></script> 
<script src="/wp-content/themes/easyauthority/js/form-submission/contact-form.js"></script> 
<!-- LAZY EFFECTS Scripts --> 
<script type="text/javascript" src="/wp-content/themes/easyauthority/js/jquery.unveilEffects.js"></script> 
<!-- Owl Carousel  Gallery --> 
<script src="/wp-content/themes/easyauthority/js/owl-carousel/owl.carousel.min.js"></script> 
<!-- Filter Gallery --> 
<script src="/wp-content/themes/easyauthority/js/projects/isotope.js"></script> 
<!-- Custom Scripts --> 
<script src="/wp-content/themes/easyauthority/js/custom.js"></script> 

<?php wp_footer(); ?>
</body>
</html>
