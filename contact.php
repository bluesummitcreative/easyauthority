<?php
	/* Template Name: Contact */ 
	get_header();
	get_template_part('inc/page-header');
?>
<div class="container-fluid container-padding">
		<div class="row">
		<?php
			get_template_part('inc/contact-loop');
			?>
		</div>
</div>
<?php
	get_footer();
?>