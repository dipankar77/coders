<?php
//load all theme jquery script
function trobica_theme_scripts() {
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js',array('jquery'), false, '', false);   
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',array(),'', 'in_footer');
	wp_enqueue_script( 'jquery-effects-core');
	wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish.js',array(),'', 'in_footer');
	wp_enqueue_script( 'jquery-fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js',array(),'', 'in_footer');
	wp_enqueue_script( 'jquery-magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js',array(),'', 'in_footer');
	wp_enqueue_script( 'jquery-sticky', get_template_directory_uri() . '/js/jquery.sticky.js',array(),'', 'in_footer');
	wp_enqueue_script( 'imagesloaded');     
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js',array(),'', 'in_footer');
	wp_enqueue_script( 'slick-animation', get_template_directory_uri() . '/js/slick-animation.js',array(),'', 'in_footer');
	wp_enqueue_script( 'resizesensor', get_template_directory_uri() . '/js/ResizeSensor.min.js',array(),'', 'in_footer');
	wp_enqueue_script( 'theia-sticky-sidebar', get_template_directory_uri() . '/js/theia-sticky-sidebar.min.js',array(),'', 'in_footer');
	wp_enqueue_script( 'trobica-totop', get_template_directory_uri() . '/js/totop.js',array(),'', 'in_footer');
	wp_enqueue_script( 'trobica-scripts', get_template_directory_uri() . '/js/scripts.js',array(),'', 'in_footer');
}    