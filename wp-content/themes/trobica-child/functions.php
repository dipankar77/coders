<?php
add_action( 'wp_enqueue_scripts', 'trobica_child_theme_styles',PHP_INT_MAX);
function trobica_child_theme_styles() {
		
    wp_enqueue_style('trobica-parent-style', get_template_directory_uri(). '/style.css');
    wp_enqueue_style('trobica-child-style', get_stylesheet_uri(), array( 'trobica-parent-style') );
}





