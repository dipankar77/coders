<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<link rel="profile" href="//gmpg.org/xfn/11" />
	<meta name="viewport" content="width=device-width, initial-scale=1" >   	
 
	<?php wp_head(); ?> 
</head>
	
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<?php if ( class_exists('ReduxFrameworkPlugin') ) :if (trobica_option( 'trobica_preloader_set')) :  
		 $trobica_preload = trobica_option( 'trobica_preloader_set' ); if ($trobica_preload == 'show_home') {  ?>
					
		<?php  if (is_front_page() ){ ?>
							<!--  Start Home Preloader  -->  
			<div class="pre-loading">
				<div class="load-circle">
				</div>
			</div><!--Preloader-->
					
		<?php } 
		} else if ($trobica_preload == 'show_all') {?>
					
			<div class="pre-loading">
				<div class="load-circle">
				</div>
			</div><!--Preloader-->
				
		<?php  } endif ; 
	endif; ?>				