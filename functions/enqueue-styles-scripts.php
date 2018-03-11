<?php
	//Enqueue Styles and Scripts
	function bsc_enqueue_styles_scripts() {
		
		// CSS
				
		wp_enqueue_style('style', get_template_directory_uri() . '/css/custom-layout.css');
		

		// JS
		
		wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), null, true ); 
		
		//wp_enqueue_script( 'min', get_template_directory_uri() . '/js/jquery-1.12.3.min.js', array(), null, true );
		wp_enqueue_script( 'jquery'); 

		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/jquery.animate-enhanced.min.js', array(), null, true ); 
		
		wp_enqueue_script( 'easypiechart', get_template_directory_uri() . '/js/jquery.easypiechart.min.js', array(), null, true ); 
		
		wp_enqueue_script( 'unveil', get_template_directory_uri() . '/js/jquery.unveilEffects.js', array(), null, true ); 

	} 
		
	if (!is_admin()) add_action( 'wp_enqueue_scripts', 'bsc_enqueue_styles_scripts' ); //Load styles and scripts on non-admin screens
?>
