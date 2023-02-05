<?php

get_header(); 

//custom header
if ( class_exists('ReduxFrameworkPlugin') ) { 
	do_action('trobica-custom-header','trobica_header_start') ;        
} else { 
	?>
	<!--Fall back if no reduxoptions instaltrobica-->
	<div class="default-header clearfix">
		<?php get_template_part( 'inc/menu','normal'); ?>
	</div><!--/home end-->
	<?php 
} ?>

<div class="clearfix content page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 news-list aligncenter">
				<h2 class="error-title"><?php esc_html_e('404', 'trobica'); ?></h2>
				<p class="error-text"><?php esc_html_e('Oops..!!! Page not found!','trobica') ?></p>
				<div class="spc-40 clearboth"></div>
				<a class="content-btn" href="<?php echo esc_url ( home_url('/') ); ?>">
					<?php echo esc_html_e('Go Back Now!','trobica') ?>
					<span class="content-btn-align-icon-right content-btn-button-icon">
						<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
					</span>
				</a>
			</div><!--/.col-md-8-->
		</div><!--/.row-->
	</div><!--/.container-->
</div><!--/.content-->

<?php 
//custom footer
if ( class_exists('ReduxFrameworkPlugin') ) { 
	do_action('trobica-custom-footer','trobica_footer_start');
} else {
	//Fall back if no reduxoptions instaltrobica
	get_template_part( 'inc/bottom','footer'); 
}

get_footer(); ?>