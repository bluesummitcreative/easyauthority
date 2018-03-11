<?php
function my_theme_enqueue_styles() {
	
	require_once('functions/enqueue-styles-scripts.php');	
	require_once('functions/custom-walker.php');
	require_once('functions/gravity-forms.php');
	require_once('functions/register-menus.php');	
	require_once('functions/register-sidebars.php');
	require_once('functions/theme-setup.php');


    $parent_style = 'parent-style'; 

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

register_sidebar();

/**
 * Register Sidebar
 */
function textdomain_register_sidebars() {
 
    /* Register the primary sidebar. */
    register_sidebar(
        array(
            'id' => 'unique-sidebar-id',
            'name' => __( 'Blog', 'textdomain' ),
            'description' => __( 'A short description of the sidebar.', 'textdomain' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );
 
    /* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'textdomain_register_sidebars' );




function register_my_menu() {
  register_nav_menu('footer-menu',__( 'Footer menu' ));
}

add_action( 'init', 'register_my_menu' );

function hook_javascript() {
	?>
	<script type="text/javascript">
        (function($){
            $(document).ready(function(){
                $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
                    //event.preventDefault();
                    event.stopPropagation();
                    $(this).parent().siblings().removeClass('open');
                    $(this).parent().toggleClass('open');
                });
            });
        })(jQuery);
	</script>
	<?php
}
//add_action('wp_head', 'hook_javascript');

?>