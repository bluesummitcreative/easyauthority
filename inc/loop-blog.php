<div class="col-sm-9">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="blog-post-info col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="meta">
		<div class="row post">
		<?php if(has_post_thumbnail()) { ?>
			<div class="col-sm-3">
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array('class' => 'img-responsive'));?></a>
			</div>
			
			<div class="col-sm-9">
				
			<?php } else { ?>
			<div class="blog-text col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<?php } ?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_content(); ?>
			</div>
		    
			</div>
	
	</div>
                <!--blog-post-info--> 
              </div>
              <!--blog-post-box--> 
	
	<?php wp_link_pages(); ?>
    <?php endwhile; endif; ?>
</div>