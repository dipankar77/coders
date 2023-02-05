<?php 
//preloader custom setting
function trobica_preloader_set() {
	if  ( class_exists('ReduxFrameworkPlugin')){
		$color =  trobica_option( 'trobica_loader_color' );
		$loader_bg = "
		.load-circle{border-top-color: $color;}
		";   
		if ( class_exists('ReduxFrameworkPlugin') && trobica_option( 'trobica_loader_color' )) {           
			wp_add_inline_style( 'trobica-styles', $loader_bg );
		}
	}
} 

function trobica_preloader() {
	if  ( class_exists('ReduxFrameworkPlugin')){
		$preload = trobica_option( 'trobica_preloader_set' );
		if ( class_exists('ReduxFrameworkPlugin') ) : if ($preload == 'show_home') :
			wp_enqueue_script( 'preloader', get_template_directory_uri() . '/js/loader.js',array(),'', 'in_footer');
		endif ;  endif;
		
		if ( class_exists('ReduxFrameworkPlugin') ) : if ($preload == 'show_all') :
			wp_enqueue_script( 'preloader', get_template_directory_uri() . '/js/loader.js',array(),'', 'in_footer');
		endif ;  endif;
	}
}    