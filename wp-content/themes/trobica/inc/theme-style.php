<?php
function trobica_theme_styles()  
{ 
	// Register the style for the theme
	wp_enqueue_style ('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1', 'all' );
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1', 'all' );
	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', array(), '1', 'all' );
	wp_enqueue_style('preloader', get_template_directory_uri() . '/css/preloader.css', array(), '1', 'all' );
	wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), '1', 'all' );
	wp_enqueue_style('magic', get_template_directory_uri() . '/css/magic.css', array(), '1', 'all' );
	wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css', array(), '1', 'all' );
	wp_enqueue_style('trobica-woo-style', get_template_directory_uri() . '/css/woo-style.css', array(), '1', 'all' );
	wp_enqueue_style('jquery-fatnav', get_template_directory_uri() . '/css/jquery.fatNav.css', array(), '1', 'all' );
	wp_enqueue_style('trobica-styles', get_stylesheet_directory_uri() . '/style.css', array(), '5.1.1', 'all' );

}

//google font 
/*
Register Fonts
*/
function trobica_fonts_url() {
	$font_url = '';
	
	/*
	Translators: If there are characters in your language that are not supported
	by chosen font(s), translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Google font: on or off', 'trobica' ) ) {
		$font_url = add_query_arg( 'family', urlencode( 'Roboto:400,400i,500,600,600i,700,700i,800,800i,900' ), "//fonts.googleapis.com/css" );
	}
	return $font_url;
}

/*
Enqueue scripts and styles.
*/
function trobica_fonts_style() {
	wp_enqueue_style( 'trobica-fonts', trobica_fonts_url(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'trobica_fonts_style' );

//for google font  in editor
function trobica_fonts_editor_style() {
	$font_url = add_query_arg( 'family', urlencode( 'Roboto:400,400i,500,600,600i,700,700i,800,800i,900' ), "//fonts.googleapis.com/css" );
	add_editor_style( $font_url );
}
add_action( 'after_setup_theme', 'trobica_fonts_editor_style' );