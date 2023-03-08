<?php
/*
Template Name: Blank Page Builder
Template Post Type: page, portfolio 
Description:One Page Builder with container.
*/
get_header(); 
		
	//custom header
	if ( class_exists('ReduxFrameworkPlugin') ) { 
		do_action('trobica-custom-header','trobica_header_start') ;        
	} else { ?>
		<!--Fall back if no reduxoptions instaltrobica-->
		<!--HOME START-->
		<div class="default-header clearfix">
			<!--HEADER START-->
			<?php get_template_part( 'inc/menu','normal'); ?>
			<!--HEADER END-->
		</div><!--/home end-->
		<!--HOME END-->
	<?php }
	
	//page content
	echo'<div class="blank-builder">';
	while (have_posts()) : the_post();
		the_content();
	endwhile;
	echo'</div>';

	//custom footer
	if ( class_exists('ReduxFrameworkPlugin') ) { 
		do_action('trobica-custom-footer','trobica_footer_start');
	} else {
		//Fall back if no reduxoptions instaltrobica
		get_template_part( 'inc/bottom','footer'); 
	}
		
get_footer(); ?>