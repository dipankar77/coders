<?php
/**
 * Blog Post Loop
 */
?>
<!--BLOG POST START-->      
<article id="post-<?php  the_ID(); ?>" <?php  post_class('clearfix blog-post'); ?>>
 
	<!--if post is standard-->
	<?php  if ( get_post_meta($post->ID, 'post_format', true) == ''){
		the_post_thumbnail(); 
	}

	if ( get_post_meta($post->ID, 'post_format', true) == 'post_standard'){
		the_post_thumbnail( 'full', array( 'class' => 'full-size-img' ) );
		//post is gallery
	} else if ( get_post_meta($post->ID, 'post_format', true) == 'post_gallery'){ 
		echo '<div class="blog-gallery clearboth clearfix">';
			$trobica_image_ids = get_post_meta(get_the_ID(), 'post_gallery_setting', true);
			$trobica_image_ids = explode( ',', $trobica_image_ids );
			foreach( $trobica_image_ids as $trobica_image_id ) {
				$trobica_image_title  = get_the_title( $trobica_image_id );
				$trobica_image_port = wp_get_attachment_image( $trobica_image_id, 'full' );
				$trobica_imageurl     =   wp_get_attachment_url( $trobica_image_id ); 
				echo '<div>
					<a class="blog-popup-img" href="' . esc_url( $trobica_imageurl ) . '">
						<span>
						<i class="fa fa-search"></i>
						</span>
						' . $trobica_image_port . '
					</a>
				</div>';
			} 
		echo'</div>';
	
	//if post is slider
	} else if ( get_post_meta($post->ID, 'post_format', true) == 'post_slider'){ ?>
	
		<div class="blog-slider ani-slider slider" data-slick='{"autoplaySpeed":<?php if ( class_exists('ReduxFrameworkPlugin') && trobica_option( 'trobica_blog_slide_delay' ) !='' ){echo esc_attr ( trobica_option( 'trobica_blog_slide_delay' ));} else {echo '8000'; } ?> }'>
			<?php $trobica_simage_ids = get_post_meta(get_the_ID(), 'post_slider_setting', true);
			$trobica_simage_ids = explode( ',', $trobica_simage_ids );
			foreach( $trobica_simage_ids as $trobica_simage_id ) {
				$trobica_simage_port = wp_get_attachment_image( $trobica_simage_id, 'full' );
				$trobica_simageurl =  esc_url( wp_get_attachment_url( $trobica_simage_id )); ?>
				<div class="slide">
					<div class="slider-mask" data-animation="slideLeftReturn" data-delay="0.1s">
					</div>
					<div class="slider-img-bg blog-img-bg" data-animation="fadeIn" data-delay="0.2s" data-animation-duration="0.7s"data-background="<?php echo esc_url($trobica_simageurl); ?>">
					</div>
					<div class="blog-slider-box">
						<div class="slider-content"></div>
					</div><!--/.blog-slider-box-->
				</div><!--/.slide-->
			<?php }
		echo'</div>'; 

	//if post video 
	} else if ( get_post_meta($post->ID, 'post_format', true) == 'post_video'){

		echo'<div class="video"><iframe width="560" height="315" src="'.esc_attr( get_post_meta($post->ID, 'post_video_setting', true)).'?wmode=opaque;rel=0;showinfo=0;controls=0;iv_load_policy=3"></iframe></div>';
				
	//if post audio
	} else if ( get_post_meta($post->ID, 'post_format', true) == 'post_audio'){ ?>
		<div class="audio">
			<?php $trobica_audio =get_post_meta($post->ID, 'post_audio_setting', true);
			echo wp_kses( $trobica_audio, array( 
				'iframe' => array(
					'src' => array(),
					'width' => array(),
					'height' => array(),
					'scrolling' => array(),
					'frameborder' => array(),
				),
			) ); ?>
		</div>
	<?php }?>

	<div class="spc-30 clearfix"></div>
	<a href="<?php the_permalink(); ?>">
		<h3 class="entry-title"><?php the_title(); ?></h3>
	</a>

	<ul class="post-detail">
		<?php if(has_category()) { ?> 
			<li>
				<i class="fa fa-archive"></i> <?php the_category(', '); ?>
			</li>
		<?php }?>

		<?php if(get_the_tag_list()) { ?> 
			<li>
				<i class="fa fa-tags"></i><?php the_tags('', ', '); ?>
			</li>
		<?php }?>
			<li>
				<i class="fa fa-calendar-o"></i> <?php echo get_the_date(); ?> 
			</li>
	</ul>

	<div class="spc-20 clearfix"></div>
	<?php the_excerpt(); ?>
	<div class="spc-10 clearfix"></div>
	<a class="content-btn" href="<?php the_permalink(); ?>">
		<?php echo esc_html_e('Continue Reading','trobica') ?>
		<span class="content-btn-align-icon-right content-btn-button-icon">
			<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
		</span>
	</a>
	<div class="border-post clearfix"></div>
	<div class="clearboth spc-40"></div>
</article><!--/.blog-post-->
<!--BLOG POST END-->