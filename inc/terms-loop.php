<!--=====================================--> 
<!--============== Banner ===============--> 
<!--=====================================-->
<div class="sub-banner-con about-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="container">
    <div class="row">
      <aside class="sub-banner text-center">
       <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">terms and conditions</li>
       </ol>
       <h1>terms and conditions</h1>
       <!--sub-banner--> 
      </aside>
      <!--row--> 
    </div>
    <!--container--> 
  </div>
  <!--sub-banner-con--> 
</div>
<!--================================--> 
<!--========= Content =========--> 
<!--================================-->

<?php if ( is_page_template('full-width.php') ) { ?>
	<div class="col-sm-12">
	<?php } else { ?>
	<div class="col-sm-9">
	<?php } ?>
	<?php if(has_post_thumbnail()) { ?>
        <div class="row">
        	<div class="col-sm-12">
        		<?php the_post_thumbnail('medium_large', ['class' => 'img-responsive']);?>
        	</div>
		</div>
	<?php } else {} ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; endif; ?>
</div>