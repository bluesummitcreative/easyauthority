<!--=============================--> 
<!--========= We Offer =========--> 
<!--=============================-->
<div class="padding-outer col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="container">
    <div class="row text-center">
		
      <?php the_field ('intro'); ?>
    
      <!--row--> 
    </div>
    <!--container--> 
  </div>
  <!--padding-outer--> 
</div>
<!--================================--> 
<!--========= Our Services =========--> 
<!--================================-->

<div class="padding-outer grey-bg col-lg-12 col-md-12 col-sm-12 col-xs-12">
 <div class="container">
  <div class="row text-center">
   <h2>our services</h2>
   <div class="spacer"></div>
	 </div>
	 <div class="row">
   
					<?php

					// check if the repeater field has rows of data
					if( have_rows('service') ): $counter = 1;

						// loop through the rows of data
						while ( have_rows('service') ) : the_row(); ?>
	  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">   
     <div class="service-innerbox services-details red-bg">
        <div>
			<p><?php the_sub_field ('content')?></p>
		
		</div>
     <!--service-innerbox--> 
    </div>
    <!--col-->
</div> 
		  <?php $counter++; if($counter % 4 === 0) :  echo '</div> <div style="margin-top:40px;" class="row">'; endif; ?>
	  
								
						<?php endwhile; endif; ?>	
			

		   

	  </div> 
	  </div> 
	</div> 

<!--===============================--> 
<!--========= If You need =========--> 
<!--===============================-->
<div class="padding-inner red-bg col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="container">
    <div class="row text-center text-box any-service">
      <h3>If you need any other service which is not mentioned above<br>feel free to contact us</h3>
      <div class="clearfix"></div> 
        <div class="btn-primary btn1"><a href="#">send message Now <span class="btn-arrow"></span></a></div>
      <!--row--> 
    </div>
    <!--container--> 
  </div>
  <!--padding-inner--> 
 </div>
