<?php
/*
* Menu for search page
*/
global $trobica_theme_settings;
?>
<nav class="header apply-header white-header clearfix"> 
	<div class="nav-box">
		<div class="stuck-nav">
			 <div class="container-fluid">
				<div class="top-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img alt="<?php esc_attr_e ('Logo','trobica'); ?>" class="logo1" src="<?php 
							if ( trobica_option('trobica_header_logo_white') ){ 
								$trobica_header_logo_white = trobica_option('trobica_header_logo_white');
								echo esc_url ( $trobica_header_logo_white['url']); 
							} else { 
								echo get_template_directory_uri(); ?>/images/logo-white.png <?php } ?>">
					</a>
				</div><!--End Logo-->
				
				<div class="header-wrapper <?php  if ( class_exists('ReduxFrameworkPlugin') && (trobica_option( 'trobica_menu_position' ) =='center')) { echo 'dflex';}?> hidden-xs hidden-sm">
					<div class="menu-wrapper">
						<?php trobica_custom_menu_page ('trobica_header_menu');  ?>
					</div><!-- End menu-wrapper -->
				
					<ul class="header-icon hidden-sm hidden-xs"> 

						<?php if ( class_exists( 'ReduxFrameworkPlugin' ) ) :
							if ( trobica_option( 'trobica_header_enable_social' ) == 'on' && trobica_option( 'trobica_header_facebook') ) :  ?>
								<li>
									<a href="<?php  echo esc_url( trobica_option( 'trobica_header_facebook' ) ); ?>">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
							<?php endif; 
						endif; ?>

						<?php if (class_exists('ReduxFrameworkPlugin')) :
							if (trobica_option('trobica_header_enable_social') == 'on' && trobica_option('trobica_header_googleplus')) :  ?>
								<li>
									<a href="<?php  echo esc_url(trobica_option( 'trobica_header_googleplus' )); ?>">
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
							<?php endif; 
						endif; ?>

						<?php if ( class_exists( 'ReduxFrameworkPlugin' ) ) :
							if ( trobica_option( 'trobica_header_enable_social' ) == 'on' && trobica_option( 'trobica_header_twitter' ) ) :  ?>
								<li>
									<a href="<?php  echo esc_url( trobica_option( 'trobica_header_twitter' ) ); ?>">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
							<?php endif; 
						endif; ?>

						<?php if ( class_exists( 'ReduxFrameworkPlugin' ) ) :
							if ( (trobica_option( 'trobica_header_enable_social' ) == 'on') && trobica_option( 'trobica_header_instagram' ) ) :  ?>
								<li>
									<a href="<?php  echo esc_url( trobica_option( 'trobica_header_instagram' ) ); ?>">
										<i class="fa fa-instagram"></i>
									</a>
								</li>
							<?php endif; 
						endif; ?>

						<?php if ( class_exists( 'ReduxFrameworkPlugin' ) ) :
							if ( trobica_option( 'trobica_header_enable_social' ) == 'on' && trobica_option( 'trobica_header_pinterest') ) :  ?>
								<li>
									<a href="<?php  echo esc_url(trobica_option( 'trobica_header_pinterest') ); ?>">
										<i class="fa fa-pinterest"></i>
									</a>
								</li>
							<?php endif; 
						endif; ?>

						<?php if ( class_exists( 'ReduxFrameworkPlugin' ) ) :
							if ( trobica_option('trobica_header_enable_social') == 'on' && trobica_option( 'trobica_header_xing')) :  ?>
								<li>
									<a href="<?php  echo esc_url( trobica_option( 'trobica_header_xing') ); ?>">
										<i class="fa fa-xing"></i>
									</a>
								</li>
							<?php endif; 
						endif; ?>
						<?php if ( class_exists( 'ReduxFrameworkPlugin' ) ) :
							if ( trobica_option('trobica_header_enable_social') == 'on' && trobica_option( 'trobica_header_linkedin')) :  ?>
								<li>
									<a href="<?php  echo esc_url( trobica_option( 'trobica_header_linkedin') ); ?>">
										<i class="fa fa-linkedin"></i>
									</a>
								</li>
							<?php endif; 
						endif; ?>

					</ul><!-- top Socials -->


					<div class="search-icon-header hidden-xs hidden-sm">
						<?php  if ( class_exists('ReduxFrameworkPlugin') && (trobica_option( 'trobica_header_search' ) =='on')) { ?>
						<a class="search"  href="#">
							<i class="fa fa-search"></i>
						</a>
						<div class="black-search-block">
							<div class="black-search-table">
								<div class="black-search-table-cell">
									<div>
										<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
											<input type="text" class="focus-input" placeholder="<?php echo esc_attr__('Type search keyword...','trobica'); ?>" value="<?php get_search_query()?>" name="s" id="s">
											<input type="submit" id="searchsubmit" value="">
										</form>
									</div>
								</div>
							</div>
							<div class="close-black-block"><a href="#"><i class="fa fa-times"></i></a></div>
						</div>
						<?php } ?>

						<?php  if ( class_exists('ReduxFrameworkPlugin') && (trobica_option( 'trobica_header_cart' ) =='on')) { ?>

						<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
						 
						    $count = WC()->cart->cart_contents_count;
						    ?>
						    <a class="cart-contents 1" href="<?php echo wc_get_cart_url(); ?>" title="<?php esc_attr__( 'View your shopping cart','trobica' ); ?>">
						    	<?php 
						        ?>
						        <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
						        <?php
						        ?></a>
						 
						<?php } ?>
						<?php } ?>

						<?php  if ( class_exists('ReduxFrameworkPlugin') && (trobica_option( 'trobica_header_btn' ) =='on')) { ?>

						<?php if ( class_exists('ReduxFrameworkPlugin') && trobica_option( 'trobica_menu_btn') && trobica_option( 'trobica_menu_btn_url') ) { ?>

							<div class="btn-nav-top">
				                <a  href="<?php  echo esc_url( trobica_option( 'trobica_menu_btn_url') ); ?>">
			                    <?php echo esc_attr( trobica_option( 'trobica_menu_btn')); ?>
			               		 </a>
							</div>
						<?php } ?>


						<?php }?>
					</div>
					
				</div><!-- header-wrapper -->  

				<div class="mobile-wrapper hidden-lg hidden-md">
					<a href="#" class="hamburger"><div class="hamburger__icon"></div></a>
					<div class="fat-nav">
						<div class="fat-nav__wrapper">
							<div class="fat-list"> <?php trobica_custom_flat_menu_page ('trobica_header_menu'); ?></div>
						</div>
					</div>
				</div><!--End mobile-wrapper-->
				
			</div><!--End container-fluid-->
		</div><!--End stuck-nav-->
	</div><!--End nav-box-->
</nav><!--End header-->