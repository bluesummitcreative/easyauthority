<!--==============================--> 
<!--========= Contact us =========--> 
<!--==============================-->
<div class="padding-outer col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="container">
    <div class="row">
     <div class="msg-form contact-msg-box red-bg text-center col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
      <h2>Send a message</h2>
       <div id="form_result"></div>
          <div class="clear"></div>
          <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true" tabindex="10"]'); ?>
    </div>
     <aside class="contact-info col-lg-6 col-md-6 col-sm-12 col-xs-12">
      
		 <?php the_field ('contact'); ?>
		
      </ul>
     <!--col-->
     </aside> 
      <!--row--> 
    </div>
    <!--container--> 
  </div>
  <!--padding-outer--> 
</div>
<!--=======================--> 
<!--========= Map =========--> 
<!--=======================-->
