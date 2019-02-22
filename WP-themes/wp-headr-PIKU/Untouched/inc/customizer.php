<?php
/**
 * wpheadr Theme Customizer
 *
 * @package wpheadr
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wpheadr_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	$wp_customize->add_section( 'wpheadr_general_options' , array(
       'title'      => __('Sitewide General Options','wpheadr'),
       'priority'   => 30,
    ) );
	
	$wp_customize->add_section( 'wpheadr_banner_options' , array(
       'title'      => __('Header Banner Options','wpheadr'),
       'priority'   => 31,
    ) );
	
	// Setting group for social icons
   $wp_customize->add_section( 'wpheadr_social_options' , array(
		'title'      => __('Social Options','wpheadr'),
		'priority'   => 32,
   ) );
	
	/**
       * Adds textarea support to the theme customizer
    */
    class WPHeadr_Customize_Textarea_Control extends WP_Customize_Control {
        public $type = 'textarea';
 
            public function render_content() {
        ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
            </label>
        <?php
        }
    }
	
	// Begin banner Options Section //
	$wp_customize->add_setting(
    'wpheadr_header_banner_visibility'
    );

    $wp_customize->add_control(
    'wpheadr_header_banner_visibility',
    array(
        'type'     => 'checkbox',
        'label'    => __('Hide Header Banner?', 'wpheadr'),
        'section'  => 'wpheadr_banner_options',
		'priority' => 1,
        )
    );
	
	// Banner One
	$wp_customize->add_setting(
    'wpheadr_tab1_select',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
    'wpheadr_tab1_select',
    array(
        'label' => __('Banner Tab One','wpheadr'),
        'section' => 'wpheadr_banner_options',
		'priority' => 2,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
    'wpheadr_tab1_title',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
    'wpheadr_tab1_title',
    array(
        'label' => __('Banner Tab One Content Title','wpheadr'),
        'section' => 'wpheadr_banner_options',
		'priority' => 3,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
    'wpheadr_tab1_title_link',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
    'wpheadr_tab1_title_link',
    array(
        'label' => __('Banner Tab One Content Title Link','wpheadr'),
        'section' => 'wpheadr_banner_options',
		'priority' => 4,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting( 'wpheadr_tab1_caption' );
 
    $wp_customize->add_control(
        new WPHeadr_Customize_Textarea_Control(
            $wp_customize,
            'wpheadr_tab1_caption',
        array(
            'label' => 'Banner Tab One Caption',
            'section' => 'wpheadr_banner_options',
			'priority'  => 5,
            'settings' => 'wpheadr_tab1_caption'
        )
        )
    );
	
	$wp_customize->add_setting('tab1_content_image', array(
        'default-image'  => '',
		'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'tab1_content_image', array(
        'label'    => __('Banner Tab One Content Image', 'wpheadr'),
        'section'  => 'wpheadr_banner_options',
		'priority' => 6,
        'settings' => 'tab1_content_image',
    )));
	
	// Banner Two
    $wp_customize->add_setting(
        'wpheadr_tab2_select',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
        'wpheadr_tab2_select',
    array(
        'label' => __('Banner Tab Two Name','wpheadr'),
        'section' => 'wpheadr_banner_options',
		'priority' => 7,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
        'wpheadr_tab2_title',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
        'wpheadr_tab2_title',
    array(
        'label' => __('Banner Tab Two Content Title','wpheadr'),
        'section' => 'wpheadr_banner_options',
		'priority' => 8,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
        'wpheadr_tab2_title_link',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
        'wpheadr_tab2_title_link',
    array(
        'label' => __('Banner Tab Two Content Title Link','wpheadr'),
        'section' => 'wpheadr_banner_options',
		'priority' => 9,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting( 'wpheadr_tab2_caption' );
 
    $wp_customize->add_control(
        new WPHeadr_Customize_Textarea_Control(
            $wp_customize,
            'wpheadr_tab2_caption',
        array(
            'label' => 'Banner Tab Two Caption',
            'section' => 'wpheadr_banner_options',
			'priority'  => 10,
            'settings' => 'wpheadr_tab2_caption'
        )
        )
    );
	
	$wp_customize->add_setting('tab2_content_image', array(
        'default-image'  => '',
		'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'tab2_content_image', array(
        'label'    => __('Banner Tab Two Content Image', 'wpheadr'),
        'section'  => 'wpheadr_banner_options',
		'priority' => 11,
        'settings' => 'tab2_content_image',
    )));
	
	// Banner Three
    $wp_customize->add_setting(
    'wpheadr_banner_slider_visibility'
    );

    $wp_customize->add_control(
    'wpheadr_banner_slider_visibility',
    array(
        'type'     => 'checkbox',
        'label'    => __('Set Default Banner To Slider?', 'wpheadr'),
        'section'  => 'wpheadr_banner_options',
		'priority' => 12,
        )
    );
	
	$wp_customize->add_setting( 'wpheadr_slider_transition', array(
		'default' => 'slide',
	) );
	
	$wp_customize->add_control( 'wpheadr_slider_transition', array(
    'label'   => __( 'Slider Transition', 'wpheadr' ),
    'section' => 'wpheadr_banner_options',
	'priority' => 13,
    'type'    => 'radio',
        'choices' => array(
            'slide' => __( 'Slide', 'wpheadr' ),
            'slide carousel-fade' => __( 'Fade', 'wpheadr' ),
        ),
    ));
	
    //  = Category Dropdown =
    $categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cats[$category->slug] = $category->name;
	}
 
	$wp_customize->add_setting('wpheadr_slide_cat', array(
		'default'        => $default
	));
	$wp_customize->add_control( 'wpheadr_slide_cat', array(
		'settings' => 'wpheadr_slide_cat',
		'label'   => __('Select Slider Category:', 'wpheadr'),
		'section'  => 'wpheadr_banner_options',
		'priority' => 14,
		'type'    => 'select',
		'choices' => $cats,
	));
	
	$wp_customize->add_setting(
    'wpheadr_slide_number'
    );

    $wp_customize->add_control(
    'wpheadr_slide_number',
    array(
        'type' => 'text',
		'default' => '5',
        'label' => __('Number Of Slides To Show - i.e 10 (default is 5)', 'wpheadr'),
        'section' => 'wpheadr_banner_options',
		'priority' => 15,
        )
    );
	
	$wp_customize->add_setting(
    'wpheadr_slider_excerpt'
    );

    $wp_customize->add_control(
    'wpheadr_slider_excerpt',
    array(
        'type' => 'text',
		'default' => '40',
        'label' => __('Slider Excerpt Length', 'wpheadr'),
        'section' => 'wpheadr_banner_options',
		'priority' => 16,
        )
    );
	
	$wp_customize->add_setting(
        'wpheadr_tab3_select',
        array(
            'default' => '',
    ));
	
	$wp_customize->add_control(
    'wpheadr_tab3_select',
    array(
        'label' => __('Default Banner Tab Name','wpheadr'),
        'section' => 'wpheadr_banner_options',
		'priority' => 17,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
    'wpheadr_tab3_title',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
    'wpheadr_tab3_title',
    array(
        'label' => __('Default Banner Tab Content Title','wpheadr'),
        'section' => 'wpheadr_banner_options',
		'priority' => 18,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
    'wpheadr_tab3_title_link',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
    'wpheadr_tab3_title_link',
    array(
        'label' => __('Default Banner Tab Content Title Link','wpheadr'),
        'section' => 'wpheadr_banner_options',
		'priority' => 19,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting( 'wpheadr_tab3_caption' );
 
    $wp_customize->add_control(
        new WPHeadr_Customize_Textarea_Control(
            $wp_customize,
            'wpheadr_tab3_caption',
        array(
            'label' => 'Default Banner Tab Caption',
            'section' => 'wpheadr_banner_options',
			'priority'  => 20,
            'settings' => 'wpheadr_tab3_caption'
        )
        )
    );
	
	$wp_customize->add_setting('tab3_content_image', array(
        'default-image'  => '',
		'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'tab3_content_image', array(
        'label'    => __('Tab Three Content Image', 'wpheadr'),
        'section'  => 'wpheadr_banner_options',
		'priority' => 21,
        'settings' => 'tab3_content_image',
    )));
	
	// Banner Four
    $wp_customize->add_setting(
        'wpheadr_tab4_select',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
    'wpheadr_tab4_select',
    array(
        'label' => __('Banner Tab Four Name','wpheadr'),
        'section' => 'wpheadr_banner_options',
		'priority' => 22,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
    'wpheadr_tab4_title',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
    'wpheadr_tab4_title',
    array(
        'label' => __('Banner Tab Four Content Title','wpheadr'),
        'section' => 'wpheadr_banner_options',
		'priority' => 23,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
    'wpheadr_tab4_title_link',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
    'wpheadr_tab4_title_link',
    array(
        'label' => __('Banner Tab Four Content Title Link','wpheadr'),
        'section' => 'wpheadr_banner_options',
		'priority' => 24,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting( 'wpheadr_tab4_caption' );
 
    $wp_customize->add_control(
        new WPHeadr_Customize_Textarea_Control(
            $wp_customize,
            'wpheadr_tab4_caption',
        array(
            'label' => 'Banner Tab Four Caption',
            'section' => 'wpheadr_banner_options',
			'priority'  => 25,
            'settings' => 'wpheadr_tab4_caption'
        )
        )
    );
	
	$wp_customize->add_setting('tab4_content_image', array(
        'default-image'  => '',
		'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'tab4_content_image', array(
        'label'    => __('Tab Four Content Image', 'wpheadr'),
        'section'  => 'wpheadr_banner_options',
		'priority' => 26,
        'settings' => 'tab4_content_image',
    )));
	
	// Banner Five
    $wp_customize->add_setting(
        'wpheadr_tab5_select',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
    'wpheadr_tab5_select',
    array(
        'label' => __('Banner Tab Five Name','wpheadr'),
        'section' => 'wpheadr_banner_options',
		'priority' => 27,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
    'wpheadr_tab5_title',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
    'wpheadr_tab5_title',
    array(
        'label' => __('Banner Tab Five Content Title','wpheadr'),
        'section' => 'wpheadr_banner_options',
		'priority' => 28,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
    'wpheadr_tab5_title_link',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
    'wpheadr_tab5_title_link',
    array(
        'label' => __('Banner Tab Five Content Title Link','wpheadr'),
        'section' => 'wpheadr_banner_options',
		'priority' => 29,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting( 'wpheadr_tab5_caption' );
 
    $wp_customize->add_control(
        new WPHeadr_Customize_Textarea_Control(
            $wp_customize,
            'wpheadr_tab5_caption',
        array(
            'label' => 'Banner Tab Five Caption',
            'section' => 'wpheadr_banner_options',
			'priority'  => 30,
            'settings' => 'wpheadr_tab5_caption'
        )
        )
    );
	
	$wp_customize->add_setting('tab5_content_image', array(
        'default-image'  => '',
		'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'tab5_content_image', array(
        'label'    => __('Tab Five Content Image', 'wpheadr'),
        'section'  => 'wpheadr_banner_options',
		'priority' => 31,
        'settings' => 'tab5_content_image',
    )));
	
	// == Social Links Icons Section == //
    // Begin Social Icons	
	$wp_customize->add_setting(
        'wpheadr_sidebar_social_visibility'
    );

    $wp_customize->add_control(
        'wpheadr_sidebar_social_visibility',
    array(
        'type' => 'checkbox',
        'label' => __('Show Sidebar Social Icons?','wpheadr'),
        'section' => 'wpheadr_social_options',
		'priority' => 2,
        )
    );
	$wp_customize->add_setting(
        'wpheadr_sidebar_social_title',
    array(
		'default' => 'Connect With Us'
    ));
	
	$wp_customize->add_control(
        'wpheadr_sidebar_social_title',
    array(
        'label' => __('Sidebar Social Title','wpheadr'),
        'section' => 'wpheadr_social_options',
		'priority' => 3,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
        'wpheadr_facebook_url',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
        'wpheadr_facebook_url',
    array(
        'label' => __('Facebook URL','wpheadr'),
        'section' => 'wpheadr_social_options',
		'priority' => 4,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
        'wpheadr_gplus_url',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
        'wpheadr_gplus_url',
    array(
        'label' => __('Google+ URL','wpheadr'),
        'section' => 'wpheadr_social_options',
		'priority' => 5,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
        'wpheadr_twitter_url',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
        'wpheadr_twitter_url',
    array(
        'label' => __('Twitter URL','wpheadr'),
        'section' => 'wpheadr_social_options',
		'priority' => 6,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
        'wpheadr_pinterest_url',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
        'wpheadr_pinterest_url',
    array(
        'label' => __('Pinterest URL','wpheadr'),
        'section' => 'wpheadr_social_options',
		'priority' => 7,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
        'wpheadr_linkedin_url',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
        'wpheadr_linkedin_url',
    array(
        'label' => __('LinkedIn URL','wpheadr'),
        'section' => 'wpheadr_social_options',
		'priority' => 8,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
        'wpheadr_youtube_url',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
        'wpheadr_youtube_url',
    array(
        'label' => __('YouTube URL','wpheadr'),
        'section' => 'wpheadr_social_options',
		'priority' => 9,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
        'wpheadr_flicker_url',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
        'wpheadr_flicker_url',
    array(
        'label' => __('Flicker URL','wpheadr'),
        'section' => 'wpheadr_social_options',
		'priority' => 10,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
        'wpheadr_wordpress_url',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
        'wpheadr_wordpress_url',
    array(
        'label' => __('WordPress URL','wpheadr'),
        'section' => 'wpheadr_social_options',
		'priority' => 11,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
        'wpheadr_github_url',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
        'wpheadr_github_url',
    array(
        'label' => __('GitHub URL','wpheadr'),
        'section' => 'wpheadr_social_options',
		'priority' => 12,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
        'wpheadr_dribbble_url',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
		'wpheadr_dribbble_url',
    array(
        'label' => __('Dribbble URL','wpheadr'),
        'section' => 'wpheadr_social_options',
		'priority' => 13,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
		'wpheadr_rss_url'
    );

    $wp_customize->add_control(
		'wpheadr_rss_url',
    array(
        'type' => 'checkbox',
        'label' => __('Use Default RSS Feed url?', 'wpheadr'),
        'section' => 'wpheadr_social_options',
		'priority' => 14,
        )
    );
	
	$wp_customize->add_setting(
		'wpheadr_custom_rss_url',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
		'wpheadr_custom_rss_url',
    array(
        'label' => __('Alternative Custom RSS Feed URL - leave blank if above default url checked!','wpheadr'),
        'section' => 'wpheadr_social_options',
		'priority' => 15,
        'type' => 'text',
    ));
}
add_action( 'customize_register', 'wpheadr_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wpheadr_customize_preview_js() {
	wp_enqueue_script( 'wpheadr_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'wpheadr_customize_preview_js' );
