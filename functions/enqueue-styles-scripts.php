<?php
	//Enqueue Styles and Scripts
	function bsc_enqueue_styles_scripts() {
		
		// CSS
		$stylesheets = array("bootstrap/bootstrap.min","animation","button","buttons","custom-layout","fonts","headings","mobile","preloader","special-classes","typography");
		
		foreach ($stylesheets as $stylesheet) {
    		wp_enqueue_style($stylesheet, get_template_directory_uri() . '/css/'.$stylesheet.'.css');
		}
						

		// JS
		//wp_enqueue_script( 'jquery');
		wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-1.12.3.min.js',$deps, $ver, false); 
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap/bootstrap.js',$deps, $ver, true); 
		wp_enqueue_script('enveilEffects', get_template_directory_uri() . '/js/jquery.unveilEffects.js',$deps, $ver, true); 
		wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.min.js',$deps, $ver, true); 
		wp_enqueue_script('isotope', get_template_directory_uri() . '/js/projects/isotope.js',$deps, $ver, true); 
		wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js',$deps, $ver, true);

	} 
		
	if (!is_admin()) add_action( 'wp_enqueue_scripts', 'bsc_enqueue_styles_scripts' ); //Load styles and scripts on non-admin screens
?>
