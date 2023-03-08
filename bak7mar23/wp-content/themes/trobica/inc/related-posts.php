<?php
/*
* Related Post
*/ 
?>

<?php 
if (is_active_sidebar( 'default-sidebar' ) ){ 
	if ( class_exists('ReduxFrameworkPlugin') && (trobica_option( 'trobica_sidebar_format' ) !='no_sidebar')) {
		$related_no=2;
		$related = trobica_related_post( get_the_ID(), $related_no );
	}else{
		$related_no=3;
		$related = trobica_related_post( get_the_ID(), $related_no );}
}else{
		$related_no=3;
		$related = trobica_related_post( get_the_ID(), $related_no );
}

if( $related->have_posts() ):
?>

<div id="related_posts" class="clearfix">
	<h4 class="title-related-post">
		<?php  esc_html_e('Related Posts', 'trobica'); ?>
	</h4>
	<div class="row"> 
		<?php 
		while( $related->have_posts() ):
			$related->the_post();?>
			<div class="<?php if ($related_no==2 ){ echo 'col-sm-6 col-xs-12';}else{echo 'col-sm-4 col-xs-6';}?>"> 
				
				<?php if ( class_exists('ReduxFrameworkPlugin') && (trobica_option( 'trobica_related_image' ) =='hide')) {  ?>

				<?php }else{?>
				<a href="<?php  the_permalink()  ?>" rel="bookmark" title="<?php  echo esc_attr( the_title_attribute()); ?>">
					<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'trobica-related-post' );
					} ?>

				</a> 

				<?php } ?>
				 
				<div class="related-inner clerfix">
					<div>
						<p class="related-cat"><i class="fa fa-clone"></i><?php the_category(', '); ?></p>
						<a href="<?php the_permalink(); ?>"><h3 class="related-title"><?php the_title(); ?></h3></a>
					</div> 
				</div>
			</div><!--/.col-sm-4--> 
		<?php  endwhile; ?>
	</div><!--/.row--> 
</div><!--related-post-->
<?php endif;
wp_reset_postdata(); ?>