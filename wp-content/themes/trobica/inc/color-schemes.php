<?php 
//color schemes 
function trobica_color_scheme() {
	if ( class_exists( 'ReduxFrameworkPlugin' ) ) {  
		global $post ;

		//general color
		$general = trobica_option( 'trobica_color_general' );
		$color_general = "
		.cart-contents-count,.tagcloud a:hover,.to-top,.to-top:hover,.to-top::after,.blog-link-img,.portfolio-type-three .port-inner:hover .dbox-relative a span,.dsc-footer-style-3 h3:after,.ab-bordering,.abtw-soc a,.widget-border,.form-submit #submit,.navigation>li>a:before, .menu-wrapper>.menu>ul>li>a:before,.content-btn:hover,.box-small-icon:hover .trobica-icon,.to-top,.to-top::before
		{background-color:$general;}

		.dsc-heading-style1 h5, a:hover, .content-title span,.table-content h3 > span, .slider-title span,.white-header .header-icon li.current-menu-parent> a,.white-header .navigation li.current-menu-parent> a,.white-header .menu-wrapper .menu ul li.current-menu-parent> a,.white-header .header-icon li.current_page_item> a,.white-header .navigation li.current_page_item> a,.white-header .menu-wrapper .menu ul li.current_page_item> a , .custom-absolute-menu .is-sticky .navigation li.current-menu-item a,.custom-absolute-menu .is-sticky .menu-wrapper .menu ul li.current-menu-item a, .custom-absolute-menu .is-sticky .navigation li a:hover,.custom-absolute-menu .is-sticky .menu-wrapper .menu ul li a:hover, .custom-absolute-menu .navigation .sub-menu li a:hover,.custom-absolute-menu .menu-wrapper .menu ul.sub-menu li a:hover,.white-header  .navigation li a:hover,.white-header .menu-wrapper .navigation li ul li.current_page_item > a,.menu-wrapper .navigation li ul li.current_page_item > a, .menu-wrapper .menu ul li ul li.current_page_item > a ,.white-header .menu-wrapper .menu ul li ul li.current_page_item > a, .white-header .menu-wrapper .navigation li ul li a:hover,.menu-wrapper .navigation li ul li a:hover, .menu-wrapper .menu ul li ul li a:hover ,.white-header .menu-wrapper .menu ul li ul li a:hover, .header-icon li a:hover, .btn-nav-top a:hover,.slider-style-3 .slider-subtitle,.home-slider .slick-arrow:hover,.slider-btn:hover,.feature-1:hover .trobica-icon,.feature-2 .trobica-icon,.feature-2:hover .trobica-icon,.feature-3 .trobica-icon,.feature-3:hover .trobica-icon,.port-filter a.active,.port-filter a:hover,.portfolio-2 .port-inner:hover .dbox-relative h3 a:hover,.portfolio-2 .port-inner .port-dbox a span:hover,.portfolio-type-three .dbox-relative p,.team-1 p,.team-sicon li a:hover,.testimonial .rating-icon,.wpcf7-submit ,.dark-page .wpcf7-submit,.content-btn,.color-bg .wpcf7-submit,span.your-email:before, span.your-name:before, span.your-message:before, .comment-form-email:before,span.cell-phone:before,span.subject:before,.footer a,.post-meta a,.post-meta li,.blog-post-list a:hover h3,.blog-2 .content-btn,a .entry-title:hover,.tags-bottom a:hover,.share-box a:hover,.related-cat i,h3.related-title:hover,#searchform::after,.tagcloud a,.tagcloud a:hover,.abtw-soc a:hover,.form-submit #submit:hover,.dsc-btn-style3:hover  .elementor-button,.dsc-btn-style-4,code,.custom-absolute-menu .navigation .sub-menu li.current-menu-item a, .custom-absolute-menu .menu-wrapper .menu ul.sub-menu li.current-menu-item a
		{color:$general;}

		.to-top,.content-title:after,::selection,::-moz-selection,.to-top::before,.to-top::after,.box-small-icon:hover .trobica-icon,.navigation>li>a:before,.menu-wrapper>.menu>ul>li>a:before,.custom-absolute-menu .is-sticky .navigation>li>a:before,.menu-wrapper>.menu>ul>li>a:before,.btn-nav-top a,.search-icon-header #searchform::after,.slider-line,.left-box-slider .slider-line,.center-box-slider .slider-line,.feature-4 .trobica-icon,.other-portfolio .port-box,.portfolio-type-three .port-inner:hover .dbox-relative a span,.team-2 .port-box,.content-btn:hover,.wpcf7-submit:hover,.dsc-footer-style-2 .mc4wp-form-fields input[type=submit]:hover,.dsc-footer-style-3 h3:after,.dsc-footer-style-3 .mc4wp-form-fields input[type=submit], .blog-link-img .bl-icon, .blog-link-img,.blog-gallery a i,.img-pagi,.widget-border,.ab-bordering,.abtw-soc a,.form-submit #submit,.dsc-btn-style3,.dsc-btn-style-4:hover,.tagcloud a:hover,.to-top,.portfolio-type-three .port-inner:hover .dbox-relative a span
		{background:$general;}
		
		.p-table a ,.blog-slider .slide-nav:hover,.work-content .slide-nav:hover,.tagcloud a:hover
		{color:#fff;}

		.dsc-btn-style3
		{background-color:#fff;}
		
		blockquote,.box-small-icon:hover .trobica-icon,.cell-left-border,.cell-right-border,.menu-wrapper ul li ul,.btn-nav-top a,.btn-nav-top a:hover,.feature-4 .trobica-icon,.portfolio-2 .port-inner .port-dbox a span:hover,.portfolio-type-three .port-inner:hover .dbox-relative a span,.portfolio-type-three .port-inner:hover .dbox-relative h3,.team-sicon li a:hover,.team-1 .team-info,form input:focus,form textarea:focus,.comment-respond form input:focus, .comment-respond form textarea:focus,.wpcf7-submit ,.dark-page .wpcf7-submit,.content-btn,.wpcf7-submit:hover,.error-title,.blog-2 .content-btn i,.tags-bottom a:hover,.share-box a:hover,#related_posts .related-inner:hover,.tagcloud a,.tagcloud a:hover,.form-submit #submit,.form-submit #submit:hover,.dsc-btn-style3:hover,.dsc-btn-style-4,.dsc-btn-style-4:hover,.wp-block-coblocks-click-to-tweet
		{border-color:$general;}
		";   

		if ( class_exists( 'ReduxFrameworkPlugin' ) && trobica_option( 'trobica_color_general' ) ) {           
			wp_add_inline_style( 'trobica-styles', $color_general );
		}

		//hovers color
		$hovers = trobica_option( 'trobica_custom_hovers' );
		if ( class_exists( 'ReduxFrameworkPlugin' ) && trobica_option( 'trobica_custom_hovers' ) ) {  
			$custom_hovers = "a:hover{color:$hovers;}";         
			wp_add_inline_style( 'trobica-styles', $custom_hovers );
		}

		//scheme color
		$color = trobica_option( 'trobica_color_scheme' );
		if ( class_exists( 'ReduxFrameworkPlugin' ) && trobica_option( 'trobica_color_scheme' ) ) {  
			$custom_css = "a{color:$color;}";   
			wp_add_inline_style( 'trobica-styles', $custom_css );
		}
		
		//heading color 
		$heading = trobica_option( 'trobica_heading_color' );
		if ( class_exists( 'ReduxFrameworkPlugin' ) && trobica_option( 'trobica_heading_color' ) ) { 
			$heading_color = "h1, h2, h3, h4, h5, h6{color:$heading;} ";   
			wp_add_inline_style( 'trobica-styles', $heading_color );
		}

		//body color
		$general = trobica_option( 'trobica_general_color' );   
		if ( class_exists( 'ReduxFrameworkPlugin' ) && trobica_option( 'trobica_general_color' ) ) { 
			$general_color = "body{color:$general;}";          
			wp_add_inline_style( 'trobica-styles', $general_color );
		}
		
		//footer color
		$footer = trobica_option( 'trobica_footer_color' );
		if ( class_exists( 'ReduxFrameworkPlugin' ) && trobica_option( 'trobica_footer_color' ) ) {   
			$footer_color = ".footer{background-color:$footer;}";   
			wp_add_inline_style( 'trobica-styles', $footer_color );
		}

		//Main menu color
		$main_menu = trobica_option( 'trobica_main_menu' );
		if ( class_exists( 'ReduxFrameworkPlugin' ) && trobica_option( 'trobica_main_menu' ) ) {  
			$color_menu = ".custom-absolute-menu .navigation li a{color: $main_menu;}";   
			wp_add_inline_style( 'trobica-styles', $color_menu );
		}
		//Main menu color hover
		$main_menu = trobica_option( 'trobica_main_menu_hover' );
		if ( class_exists( 'ReduxFrameworkPlugin' ) && trobica_option( 'trobica_main_menu_hover' ) ) {  
			$color_menu = ".custom-absolute-menu .navigation li a:hover{color: $main_menu;}";   
			wp_add_inline_style( 'trobica-styles', $color_menu ); 
		}
		
		//menu color
		$menu = trobica_option( 'trobica_stick_menu' );
		if ( class_exists( 'ReduxFrameworkPlugin' ) && trobica_option( 'trobica_stick_menu' ) ) {  
			$color_menu = ".custom-sticky-menu .is-sticky .stuck-nav, .is-sticky .stuck-nav{background: $menu;}";   
			wp_add_inline_style( 'trobica-styles', $color_menu );
		}

		//menu2 color
		$menu2 = trobica_option( 'trobica_stick_menu2' );
		if ( class_exists( 'ReduxFrameworkPlugin' ) && trobica_option( 'trobica_stick_menu2' ) ) { 
			$color_menu2 = ".white-header .is-sticky .stuck-nav{background-color: $menu2;}";   
			wp_add_inline_style( 'trobica-styles', $color_menu2 );
		}

		//menu border color
		$menu_border = trobica_option( 'trobica_menu_border' );
		if ( class_exists( 'ReduxFrameworkPlugin' ) && trobica_option( 'trobica_menu_border' ) ) { 
			$color_border = ".custom-absolute-menu{border-color: $menu_border;}";   
			wp_add_inline_style( 'trobica-styles', $color_border );
		}
		
	}        
}

		