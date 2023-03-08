<?php
/*
* Bottom Footer
*/
global $trobica_theme_settings;
?>

<footer class="footer">
	<div class="container-fluid">
		
		<?php if ( class_exists( 'ReduxFrameworkPlugin' ) && trobica_option( 'trobica_footer_logo_white' ) != '' ) { ?>
			<img class="footer-img" src="<?php $trobica_footer_logo_white = trobica_option('trobica_footer_logo_white');
			echo esc_url ( $trobica_footer_logo_white['url']); ?>" alt="<?php esc_attr_e ('LogoWhite','trobica'); ?>">
		<?php } elseif ( class_exists('ReduxFrameworkPlugin' ) && trobica_option( 'trobica_footer_logo_dark' ) != '') { ?>
			<img class="footer-img" src="<?php 
			$trobica_footer_logo_dark = trobica_option('trobica_footer_logo_dark');
			echo esc_url ( $trobica_footer_logo_dark['url']); ?>"   alt="<?php esc_attr_e ('LogoDark','trobica'); ?>">
		<?php } else {echo '';}?>

		<div class="clearboth clearfix"></div>

		<ul class="footer-icon hidden-sm hidden-xs">
			<?php if ( class_exists( 'ReduxFrameworkPlugin' ) ) : 
				if ( trobica_option( 'trobica_footer_enable_social' ) == true && trobica_option( 'trobica_footer_facebook' )) : ?>
					<li><a href="<?php  echo esc_url( trobica_option( 'trobica_footer_facebook' ) ); ?>">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
				<?php endif; ?>
			<?php endif; ?>

			<?php if ( class_exists( 'ReduxFrameworkPlugin' ) ) :
				if ( trobica_option( 'trobica_footer_enable_social' ) == true && trobica_option( 'trobica_footer_googleplus' ) ) : ?>
					<li>
						<a href="<?php  echo esc_url(trobica_option( 'trobica_footer_googleplus' )); ?>">
							<i class="fa fa-google-plus"></i>
						</a>
					</li>
				<?php endif; ?>
			<?php endif; ?>

			<?php if ( class_exists( 'ReduxFrameworkPlugin' ) ) :
				if ( trobica_option( 'trobica_footer_enable_social' ) == true && trobica_option( 'trobica_footer_twitter' ) ) : ?>
					<li>
						<a href="<?php  echo esc_url(trobica_option( 'trobica_footer_twitter' )); ?>">
							<i class="fa fa-twitter"></i>
						</a>
					</li>
				<?php endif; ?>
			<?php endif; ?>

			<?php if (class_exists('ReduxFrameworkPlugin')) :
					if (trobica_option('trobica_footer_enable_social') == true && trobica_option( 'trobica_footer_instagram' )) :  ?>
						<li>
							<a href="<?php  echo esc_url(trobica_option( 'trobica_footer_instagram' )); ?>">
								<i class="fa fa-instagram"></i>
							</a>
						</li>
					<?php endif; ?>
			<?php endif; ?>

			<?php if (class_exists('ReduxFrameworkPlugin')) :
					if (trobica_option('trobica_footer_enable_social') == true && trobica_option( 'trobica_footer_pinterest')) :  ?>
						<li>
							<a href="<?php  echo esc_url(trobica_option( 'trobica_footer_pinterest') ); ?>">
								<i class="fa fa-pinterest"></i>
							</a>
						</li>
					<?php endif; ?>
			<?php endif; ?>

			<?php if ( class_exists( 'ReduxFrameworkPlugin' ) ) :
					if ( trobica_option( 'trobica_footer_enable_social' ) == true && trobica_option( 'trobica_footer_xing' ) ) : ?>
						<li>
							<a href="<?php  echo esc_url(trobica_option( 'trobica_footer_xing') ); ?>">
								<i class="fa fa-xing"></i>
							</a>
						</li>
					<?php endif; ?>
			<?php endif; ?>

			<?php if ( class_exists( 'ReduxFrameworkPlugin' ) ) :
					if ( trobica_option( 'trobica_footer_enable_social' ) == true && trobica_option( 'trobica_footer_linkedin' ) ) : ?>
						<li>
							<a href="<?php  echo esc_url(trobica_option( 'trobica_footer_linkedin') ); ?>">
								<i class="fa fa-linkedin"></i>
							</a>
						</li>
					<?php endif; ?>
			<?php endif; ?>
		</ul><!-- /.footer-icon -->

		<?php 
		if ( class_exists( 'ReduxFrameworkPlugin' ) && trobica_option( 'trobica_footer_text' ) ) { 
			$trobica_footer_text = trobica_option( 'trobica_footer_text' );
			echo wp_kses_post( $trobica_footer_text ); 
		} else {
			echo '<p>'.esc_html__( 'Copyright 2022 by ThemesCamp All Rights Reserved.', 'trobica' ).'</p>';
		} 
		?>

	</div><!--/.container-fluid-->
</footer><!--/.footer--> 