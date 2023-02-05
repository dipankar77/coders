<?php
/**
 * about Tab For Theme Option.
 *
 * @package trobica
 */
?>
<?php
$this->sections[] = array(
	'id' => 'general',
	'icon' => 'el el-book',
	'title' => esc_html__('General', 'trobica'),
	'desc' => esc_html__('Welcome to the theme options', 'trobica'),
);

$this->sections[] = array(
	'id' => 'style',
	'icon' => 'el el-adjust-alt',
	"subsection" => false,
	'title' => esc_html__('Styling', 'trobica'),
	'desc' => esc_html__('Configuration the style settings', 'trobica'),
	'fields' => array(
		array(
			'id'       => 'trobica_color_general',
			'type'     => 'color',
			'title'    => esc_html__('Color Scheme', 'trobica'), 
			'subtitle' => esc_html__('Pick your color scheme (default: #f96152).', 'trobica'),
			'default'  => '#f96152',
			'validate' => 'color',
		), 
		array(
			'id'       => 'trobica_color_scheme',
			'type'     => 'color',
			'title'    => esc_html__('Hyperlink Color', 'trobica'), 
			'subtitle' => esc_html__('Pick your color for hyperlink. Default color is black #999999', 'trobica'),
			'default'  => '#999999',
			'validate' => 'color',
		), 
		array(
			'id'       => 'trobica_custom_hovers',
			'type'     => 'color',
			'title'    => esc_html__('Hyperlink color on hover state', 'trobica'), 
			'subtitle' => esc_html__('Pick your color for hover state in hyperlink. Default color is #f96152', 'trobica'),
			'default'  => '#f96152',
			'validate' => 'color',
		),  
		array(
			'id'       => 'trobica_heading_color',
			'type'     => 'color',
			'title'    => esc_html__('Color on Heading', 'trobica'), 
			'subtitle' => esc_html__('Pick your color for heading text. Default color is black #000000', 'trobica'),
			'default'  => '#000000',
			'validate' => 'color',
		), 
		array(
			'id'       => 'trobica_general_color',
			'type'     => 'color',
			'title'    => esc_html__('Color on General Paragraph', 'trobica'), 
			'subtitle' => esc_html__('Pick your color for general paragraph text. Default color is black #666', 'trobica'),
			'default'  => '#666',
			'validate' => 'color',
		), 
		array(
			'id'       => 'trobica_stick_menu',
			'type'     => 'color',
			'title'    => esc_html__('Sticky Menu Background color (for menu with black background & All Sticky Custom Menu)', 'trobica'), 
			'subtitle' => esc_html__('Pick your background color for sticky menu in white text header. Default color is #fff', 'trobica'),
			'default'  => 'rgba(255,255,255,.9)',
			'validate' => 'color',
		), 
		array(
			'id'       => 'trobica_stick_menu2',
			'type'     => 'color',
			'title'    => esc_html__('Sticky Menu Background color (for menu with white background)', 'trobica'), 
			'subtitle' => esc_html__('Pick your background color for sticky menu in white text header. Default color is #ffffff', 'trobica'),
			'default'  => '#ffffff',
			'validate' => 'color',
		), 
		 array(
			'id'       => 'trobica_menu_border',
			'type'     => 'color',
			'title'    => esc_html__('Sticky Menu BBorder color (for menu with transparent background)', 'trobica'), 
			'subtitle' => esc_html__('Pick your border color for sticky menu in transparent text header. Default color is #ffffff', 'trobica'),
			'default'  => '#ffffff',
			'validate' => 'color',
		),
		array(
			'id'       => 'trobica_footer_color',
			'type'     => 'color',
			'title'    => esc_html__('Standard Footer Background color', 'trobica'), 
			'subtitle' => esc_html__('Pick your background color for standard footer. Default color is black #202020', 'trobica'),
			'default'  => '#202020',
			'validate' => 'color',
		),
		array(
			'id'       => 'trobica_footer_color',
			'type'     => 'color',
			'title'    => esc_html__('Standard Footer Background color', 'trobica'), 
			'subtitle' => esc_html__('Pick your background color for standard footer. Default color is black #202020', 'trobica'),
			'default'  => '#202020',
			'validate' => 'color',
		),
	),
);

$this->sections[] = array(
	'id' => 'preloader',
	'icon' => 'el el-repeat',
	"subsection" => false,
	'title' => esc_html__('Preloader', 'trobica'),
	'desc' => esc_html__('Configuration the style settings', 'trobica'),
	'fields' => array(
		array(
			'id'       => 'trobica_preloader_set',
			'type'     => 'select',
			'title'    => esc_html__('Preloader Setting', 'trobica'),
			'options' => array(
					'show_all' => esc_html__('Show in All pages', 'trobica'),
					'show_home' => esc_html__('Show in Home page only', 'trobica'),
					'not_show' => esc_html__('Hide in all pages', 'trobica'),
				),
		),

		array(
			'id'       => 'trobica_loader_color',
			'type'     => 'color',
			'title'    => esc_html__('Color Scheme', 'trobica'), 
			'subtitle' => esc_html__('Pick your color scheme (default: #f96152).', 'trobica'),
			'default'  => '#f96152',
			'validate' => 'color',
		),       
	),
); 

$this->sections[] = array(
	'icon' => 'el el-photo',
	"subsection" => false,
	'title' => esc_html__('Header', 'trobica'),
	'desc' => esc_html__('Assign menu for header section.', 'trobica'),
	'fields' => array(
		array(
			'id'       => 'trobica_header_set',
			'type'     => 'select',
			'title'    => esc_html__('Header type', 'trobica'),
			'options' => array(
				'default' => esc_html__('Standard Header', 'trobica'),
				'custom' => esc_html__('Custom Header', 'trobica'),
			),
		),

		array(
			'id'    => 'trobica_header_set_list',
			'type'  => 'select',
			'desc' => esc_html__('(Only if custom header selected as header type))', 'trobica'),
			'title'    => esc_html__('Header format', 'trobica'),
			'data'  => 'posts',
			'args'  => array(
				'post_type' => 'header',
				'orderby'   => 'title',
				'order'     => 'ASC',
			)
		),  
	),
);

$this->sections[] = array(
	'id' => 'header_logo',
	'icon' => 'el el-universal-access',
	"subsection" => false,
	'title' => esc_html__('Header logo', 'trobica'),
	'desc' => esc_html__('Configuration the style settings', 'trobica'),
	'fields' => array(
		array(
			'id'       => 'trobica_header_logo_white',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__('Logo White Text', 'trobica'), 
			'subtitle' => esc_html__('Upload your logo for white text (standard) header (Recommended size 240x80px)', 'trobica'),
			'default'  => array('url'=>get_template_directory_uri().'/images/logo-white.png'),
		), 
		array(
			'id'       => 'trobica_header_logo_dark',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__('Logo Dark Text', 'trobica'), 
			'subtitle' => esc_html__('Upload your logo for dark text (standard) header (Recommended size 240x80px)', 'trobica'),
			'default'  => array('url'=>get_template_directory_uri().'/images/logo.png'),
		),
		array(
			'id'       => 'trobica_logo_dim',
			'type'     => 'dimensions',
			'units'    => array('em','px','%'),
			'title'    => esc_html__('Logo dimensions (Width/Height)', 'trobica'), 
			'subtitle' => esc_html__('Enable or disable any piece of this field. Width, Height, or Units.)', 'trobica'),
			'default'  => array(
				'Width'   => '240', 
				'Height'  => '80'
			),
		), 
     
	)
);

$this->sections[] = array(
	'id' => 'trobica_header_social',
	'icon' => 'el el-group',
	"subsection" => false,
	'title' => esc_html__('Header social', 'trobica'),
	'desc' => esc_html__('Configuration the header social icons', 'trobica'),
	'fields' => array(
		array(
			'id'       => 'trobica_menu_position',
			'type'     => 'select',
			'title'    => esc_html__('Menu Position', 'trobica'), 
			'options' => array(
				'right' => esc_html__('Right', 'trobica'),
				'center' => esc_html__('Center', 'trobica'),
			), 
			'default'  => 'right',
		), 
		array(
			'id'       => 'trobica_header_enable_social',
			'type'     => 'select',
			'title'    => esc_html__('Enable Header Social', 'trobica'),
			'options' => array(
				'on' => esc_html__('On', 'trobica'),
				'off' => esc_html__('Off', 'trobica'),
			), 
			'default'  => 'off',
		), 
		array(
			'id'       => 'trobica_header_facebook',
			'type'     => 'text',
			'title'    => esc_html__('Facebook Link', 'trobica'), 
			'subtitle' => esc_html__('Input facebook link here', 'trobica'),
			'required'  => array('trobica_header_enable_social', 'equals','on'),
		), 
		array(
			'id'       => 'trobica_header_googleplus',
			'type'     => 'text',
			'title'    => esc_html__('Google Plus Link', 'trobica'), 
			'subtitle' => esc_html__('Input google plus link here', 'trobica'),
			'required'  => array('trobica_header_enable_social', 'equals','on'),
		), 
		array(
			'id'       => 'trobica_header_twitter',
			'type'     => 'text',
			'title'    => esc_html__('Twitter Link', 'trobica'), 
			'subtitle' => esc_html__('Input Twitter link here', 'trobica'),
			'required'  => array('trobica_header_enable_social', 'equals','on'),
		), 
		array(
			'id'       => 'trobica_header_instagram',
			'type'     => 'text',
			'title'    => esc_html__('Instagram Link', 'trobica'), 
			'subtitle' => esc_html__('Input Instagram link here', 'trobica'),
			'required'  => array('trobica_header_enable_social', 'equals','on'),
		),  
		array(
			'id'       => 'trobica_header_pinterest',
			'type'     => 'text',
			'title'    => esc_html__('Pinterest Link', 'trobica'), 
			'subtitle' => esc_html__('Input Pinterest link here', 'trobica'),
			'required'  => array('trobica_header_enable_social', 'equals','on'),
		), 
		array(
			'id'       => 'trobica_header_xing',
			'type'     => 'text',
			'title'    => esc_html__('Xing Link', 'trobica'), 
			'subtitle' => esc_html__('Input Xing link here', 'trobica'),
			'required'  => array('trobica_header_enable_social', 'equals','on'),
		),  
		array(
			'id'       => 'trobica_header_linkedin',
			'type'     => 'text',
			'title'    => esc_html__('LinkedIn Link', 'trobica'), 
			'subtitle' => esc_html__('Input LinkedIn link here', 'trobica'),
			'required'  => array('trobica_header_enable_social', 'equals','on'),
		),   
		array(
			'id'       => 'trobica_header_search',
			'type'     => 'select',
			'title'    => esc_html__('Search Icon', 'trobica'), 
			'subtitle' => esc_html__('To show search icon in header', 'trobica'),
			'options' => array(
				'on' => esc_html__('On', 'trobica'),
				'off' => esc_html__('Off', 'trobica'),
			), 
			'default'  => 'off',
		), 
		array(
			'id'       => 'trobica_header_cart',
			'type'     => 'select',
			'title'    => esc_html__('Cart Icon', 'trobica'), 
			'subtitle' => esc_html__('To show Cart icon in header', 'trobica'),
			'options' => array(
				'on' => esc_html__('On', 'trobica'),
				'off' => esc_html__('Off', 'trobica'),
			), 
			'default'  => 'off',
		), 
		array(
			'id'       => 'trobica_header_btn',
			'type'     => 'select',
			'title'    => esc_html__('Button', 'trobica'), 
			'subtitle' => esc_html__('To show Button in header', 'trobica'),
			'options' => array(
				'on' => esc_html__('On', 'trobica'),
				'off' => esc_html__('Off', 'trobica'),
			), 
			'default'  => 'off',
		), 
		array(
			'id'       => 'trobica_menu_btn',
			'type'     => 'text',
			'title'    => esc_html__('Button Text', 'trobica'), 
			'required'  => array('trobica_header_btn', 'equals','on'),
		),
		array(
			'id'       => 'trobica_menu_btn_url',
			'type'     => 'text',
			'title'    => esc_html__('Button URL', 'trobica'),
			'required'  => array('trobica_header_btn', 'equals','on'), 
		),
	)
);

$this->sections[] = array(
	'icon' => 'el-icon-lines',
	"subsection" => false,
	'title' => esc_html__('Footer', 'trobica'),
	'desc' => esc_html__('Assign menu for footer section.', 'trobica'),
	'fields' => array(
		array(
			'id'       => 'trobica_footer_set',
			'type'     => 'select',
			'title'    => esc_html__('Footer Text Color', 'trobica'),
			'options' => array(
				'default' => esc_html__('Standard Footer', 'trobica'),
				'custom' => esc_html__('Custom Footer', 'trobica'),
			),
		),
		array(
			'id'    => 'trobica_footer_set_list',
			'type'  => 'select',
			'title'    => esc_html__('Footer Text Color', 'trobica'),
			'data'  => 'posts',
			'args'  => array(
				'post_type' => 'footer',
				'orderby'   => 'title',
				'order'     => 'ASC',
			)
		),     
	),
);

$this->sections[] = array(
	'id' => 'footer_logo',
	"subsection" => false,
	'title' => esc_html__('Footer logo', 'trobica'),
	'desc' => esc_html__('Configuration the style settings', 'trobica'),
	'fields' => array(
		array(
			'id'       => 'trobica_footer_logo_white',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__('Logo White Text', 'trobica'), 
			'subtitle' => esc_html__('Upload your logo for white text (standard) footer (Recommended size 240x80px)', 'trobica'),
			'default'  => array('url'=>get_template_directory_uri().'/images/logo.png'),
		),

		array(
			'id'       => 'trobica_footer_logo_dark',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__('Logo Dark Text', 'trobica'), 
			'subtitle' => esc_html__('Upload your logo for dark text (standard) footer (Recommended size 240x80px)', 'trobica'),
			'default'  => array('url'=>get_template_directory_uri().'/images/logo-white.png'),
		), 
		array(
			'id'       => 'trobica_footer_text',
			'type'     => 'editor',
			'title'    => esc_html__('Footer Text', 'trobica'), 
			'subtitle' => esc_html__('Upload your logo for dark text (standard) footer (Recommended size 240x80px)', 'trobica'),
			'default' => '',
			'args'   => array('teeny'  => true,'textarea_rows'=> 10)
		), 
	)
);

$this->sections[] = array(
	'id' => 'trobica_footer_social',
	'icon' => 'el el-group-alt',
	"subsection" => false,
	'title' => esc_html__('Footer social', 'trobica'),
	'desc' => esc_html__('Configuration the footer social icons', 'trobica'),
	'fields' => array(
		array(
			'id'       => 'trobica_footer_enable_social',
			'type'     => 'switch',
			'title'    => esc_html__('Enable Footer Social', 'trobica'), 
			'default'  => true,
		), 
		array(
			'id'       => 'trobica_footer_facebook',
			'type'     => 'text',
			'title'    => esc_html__('Facebook Link', 'trobica'), 
			'subtitle' => esc_html__('Input facebook link here', 'trobica'),
			'required'  => array('trobica_footer_enable_social', 'equals',true),
		), 
		array(
			'id'       => 'trobica_footer_googleplus',
			'type'     => 'text',
			'title'    => esc_html__('Google Plus Link', 'trobica'), 
			'subtitle' => esc_html__('Input google plus link here', 'trobica'),
			'required'  => array('trobica_footer_enable_social', 'equals',true),
		), 
		array(
			'id'       => 'trobica_footer_twitter',
			'type'     => 'text',
			'title'    => esc_html__('Twitter Link', 'trobica'), 
			'subtitle' => esc_html__('Input Twitter link here', 'trobica'),
			'required'  => array('trobica_footer_enable_social', 'equals',true),
		), 
		array(
			'id'       => 'trobica_footer_instagram',
			'type'     => 'text',
			'title'    => esc_html__('Instagram Link', 'trobica'), 
			'subtitle' => esc_html__('Input Instagram link here', 'trobica'),
			'required'  => array('trobica_footer_enable_social', 'equals',true),
		),  
		array(
			'id'       => 'trobica_footer_pinterest',
			'type'     => 'text',
			'title'    => esc_html__('Pinterest Link', 'trobica'), 
			'subtitle' => esc_html__('Input Pinterest link here', 'trobica'),
			'required'  => array('trobica_footer_enable_social', 'equals',true),
		), 
		array(
			'id'       => 'trobica_footer_xing',
			'type'     => 'text',
			'title'    => esc_html__('Xing Link', 'trobica'), 
			'subtitle' => esc_html__('Input Xing link here', 'trobica'),
			'required'  => array('trobica_footer_enable_social', 'equals',true),
		),  
		array(
			'id'       => 'trobica_footer_linkedin',
			'type'     => 'text',
			'title'    => esc_html__('LinkedIn Link', 'trobica'), 
			'subtitle' => esc_html__('Input LinkedIn link here', 'trobica'),
			'required'  => array('trobica_footer_enable_social', 'equals',true),
		),  
	)
);

$this->sections[] = array(
	'id' => 'portfolio',
	'icon'=>'el el-briefcase',
	"subsection" => false,
	'title' => esc_html__('Portfolio setting', 'trobica'),
	'desc' => esc_html__('Configuration portfolio settings', 'trobica'),
	'fields' => array(
		array(
			'id'       => 'trobica_portfolio_all',
			'type'     => 'text',
			'title'    => esc_html__('All categories filter', 'trobica'), 
			'subtitle' => esc_html__('Portfolio Text Filter for all categories', 'trobica'),
			'desc' => esc_html__('Insert your text for portfolio filter for all categories. The default text is "All"', 'trobica'),
			'default'  => 'All',
		),  
		array(
			'id'       => 'trobica_other_port_sub',
			'type'     => 'text',
			'title'    => esc_html__('Other Portfolio Section Subtitle', 'trobica'), 
			'desc' => esc_html__('Insert your text for subt title of other portfolio section on single portfolio page.<br/>Leave it blank if you want to use the default text.', 'trobica'),
			'default'  => 'See our other portfolio',
		),
		array(
			'id'       => 'trobica_other_port_title',
			'type'     => 'text',
			'title'    => esc_html__('Other Portfolio Section Title', 'trobica'), 
			'desc' => esc_html__('Insert your text for title of other portfolio section on single portfolio page.<br/>Leave it blank if you want to use the default text.', 'trobica'),
			'default'  => 'Other portfolio',
		),
	),
);

$this->sections[] = array(
	'id' => 'blog',
	'icon'=>'el el-bold',
	"subsection" => false,
	'title' => esc_html__('Blog setting', 'trobica'),
	'desc' => esc_html__('Configuration blog settings', 'trobica'),
	'fields' => array(

		array(
			'id'       => 'trobica_sidebar_format', 
			'type'     => 'select',
			'title'    => esc_html__('Sidebar Format', 'trobica'),
			'options' => array(
					'right_sidebar' => esc_html__( 'Right Sidebar', 'trobica' ),
					'left_sidebar' => esc_html__( 'Left Sidebar','trobica'),
					'no_sidebar' => esc_html__( 'No Sidebar', 'trobica' ),
			),
			'default'  => 'right_sidebar', 
		),
		array(
			'id'       => 'trobica_related_image',
			'type'     => 'select',
			'title'    => esc_html__('Featured Image in Related Posts', 'trobica'),
			'options' => array(
					'show' => esc_html__('Show', 'trobica'),
					'hide' => esc_html__('Hide', 'trobica'),
			),
			'default'  => 'show',
		),

		array( 
			'id'       => 'trobica_blog_slide_delay',
			'type'     => 'slider',
			'title'    => esc_html__('Blog Slider Delay', 'trobica'), 
			'desc' => esc_html__('Insert the slider delay for slider in blog sidebar,blog wide and single blog post here. The default value 8000', 'trobica'),
			'default'  => 8000,
			"min"       => 1,
			"step"      => 1,
			"max"       => 10000,
			'display_value' => 'label'
		),       
	),

);

?>