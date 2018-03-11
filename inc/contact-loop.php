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
          <form method="post" id="contactpage">
            <input type="hidden" name="to" value="name@easyauthority.com"/>
      <ul>
        <li>
          <input name="name" id="name" type="text" placeholder="Name:" />
        </li>
        <li>
         <input name="email" id="email" type="text" placeholder="Email:" />
        </li>
        <li>
         <input name="comments" id="comments" type="text" placeholder="Message:" />
        </li>
      </ul>
      <button class="light-font" name="send" type="submit">send message Now <img alt="" src="images/arrow-white-right.png"></button>
      </form>
      <!--msg-form--> 
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
