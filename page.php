<?php
	get_header();
	get_template_part('inc/page-header');
?>
<div class="container-fluid container-padding">
	<div class="container">
		<div class="row">
		<?php
			get_sidebar();
			get_template_part('inc/loop');
			?>
		</div>
	</div>
</div>
<?php
	get_footer();
?>