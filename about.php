<?php
	/* Template Name: About */ 
	get_header();
	get_template_part('inc/page-header');
?>
<div class="container-fluid container-padding">
		<div class="row">
		<?php
			get_template_part('inc/about-loop');
			?>
		</div>
</div>
<?php
	get_footer();
?>