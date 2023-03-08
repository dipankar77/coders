<?php

get_header(); 
		
	//custom header
	if ( class_exists('ReduxFrameworkPlugin') ) { 
		do_action('trobica-custom-header','trobica_header_start') ;        
	} else { ?>
	
		<!--Fall back if no reduxoptions install-->
		<div class="default-header clearfix">
			<?php get_template_part( 'inc/menu','normal'); ?>
		</div><!--/home end-->		
	<?php } ?>
		
	<div class="content blog-wrapper">  
		<div class="container clearfix">
			 <div class="row clearfix">
				<div class="col-md-8 blog-content">
					<h3 class="search-title"><?php esc_html_e('Search result for ', 'trobica'); the_search_query(); ?>:</h3>
					<!--BLOG POST START-->
					<?php if ( have_posts() ) : ?>
					
					<?php while (have_posts()) : the_post(); get_template_part( 'inc/loop', 'post' ); endwhile  ?>
					
					<?php  else: ?>
					<p><?php esc_html_e('Sorry, no results found. ','trobica'); ?></p>
					<?php endif; ?>
					<!--BLOG POST END-->
					
					<ul class="pagination clearfix">
						<li><?php  previous_posts_link();  ?></li>
						<li><?php next_posts_link(); ?> </li>
					</ul>
					<div class="spc-40 clearfix"></div>
				</div><!--/.col-md-8-->
				
				<?php get_sidebar(); ?>
			 </div><!--/.row-->
		</div><!--/.container-->
	</div><!--/.blog-wrapper-->
	
	<?php //custom footer
		if ( class_exists('ReduxFrameworkPlugin') ) { 
			do_action('trobica-custom-footer','trobica_footer_start');
		} else {
			//Fall back if no reduxoptions instaltrobica
			get_template_part( 'inc/bottom','footer'); 
		}
		
get_footer(); ?>