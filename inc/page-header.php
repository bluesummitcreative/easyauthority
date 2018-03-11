<!--============== Banner ===============--> 
<!--=====================================-->
<div class="sub-banner-con services-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="container">
    <div class="row">
      <aside class="sub-banner text-center">
       <h1><?php
					if ( is_home() ) { 
                            echo 'Blog';
                        /*} elseif ( is_404() ) { 
							echo '404 Not Found';*/
						} elseif ( is_search() ) { 
							echo $wp_query->found_posts . ' results found for "' . esc_html( get_search_query( false ) ) .'"';
						
						} else {
							the_title();
						}
				?></h1>
       <!--sub-banner--> 
      </aside>
      <!--row--> 
    </div>
    <!--container--> 
  </div>
  <!--sub-banner-con--> 
</div>