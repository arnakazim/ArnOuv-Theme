<?php
/*
* Copyright 2017 Arnaud Ouvrier
* 
* Licensed under the Apache License, Version 2.0 (the "License");
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
* 
* http://www.apache.org/licenses/LICENSE-2.0
*       
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*/

function arnouv_customize_register( $wp_customize ) {
	//All our sections, settings, and controls will be added here
	$wp_customize->add_setting( 'light_color' , array(
		'default'     => '#43b5fb',
		'transport'   => 'refresh'
	));

	$wp_customize->add_setting( 'dark_color' , array(
		'default'     => '#1355a9',
		'transport'   => 'refresh'
	));

	$wp_customize->add_setting( 'logo_image' , array(
		'default' => get_bloginfo('template_directory') . '/img/brand-logo.png',
		'transport'   => 'refresh'
	));

	$wp_customize->add_setting( 'separator_image' , array(
		'default' => get_bloginfo('template_directory') . '/img/separator-background.png',
		'transport'   => 'refresh'
	));

	$wp_customize->add_setting( 'banner_image' , array(
		'default' => get_bloginfo('template_directory') . '/img/banner.jpg',
		'transport'   => 'refresh'
	));

	$wp_customize->add_setting( 'about_text' , array(
		'default'     => __('Oups... No information have been given for this section...', 'arnouv-theme'),
		'transport'   => 'refresh'
	));

	$wp_customize->add_setting( 'twitter_url' , array(
		'default'     => '',
		'transport'   => 'refresh'
	));

	$wp_customize->add_setting( 'facebook_url' , array(
		'default'     => '',
		'transport'   => 'refresh'
	));

	$wp_customize->add_setting( 'instagram_url' , array(
		'default'     => '',
		'transport'   => 'refresh'
	));

	$wp_customize->add_setting( 'youtube_url' , array(
		'default'     => '',
		'transport'   => 'refresh'
	));

	$wp_customize->add_section( 'arnouv-theme_color_section' , array(
		'title'      => __('Theme colors', 'arnouv-theme' ),
		'priority'   => 30
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
		'label'        => __( 'Light theme color', 'arnouv-theme' ),
		'section'    => 'arnouv-theme_color_section',
		'settings'   => 'light_color',
	)));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dark_color', array(
		'label'        => __( 'Dark theme color', 'arnouv-theme' ),
		'section'    => 'arnouv-theme_color_section',
		'settings'   => 'dark_color',
	)));

	$wp_customize->add_section( 'arnouv-theme_about_section' , array(
		'title'      => __('&ldquo;About&rdquo; section', 'arnouv-theme' ),
		'priority'   => 30
	));

	$wp_customize->add_control('about_text', array(
		'label'      => __( '&ldquo;About&rdquo; section text', 'arnouv-theme' ),
		'section'    => 'arnouv-theme_about_section',
		'settings'   => 'about_text',
		'type'		 => 'textarea'
	));

	$wp_customize->add_section( 'arnouv-theme_social_section' , array(
		'title'      => __('Social networks links', 'arnouv-theme' ),
		'priority'   => 30,
		'description' => __('Let the fields empty if you don&apos;t use these social networks', 'arnouv-theme')
	));

	$wp_customize->add_control('twitter_url', array(
		'label'      => __( 'Your Twitter URL', 'arnouv-theme' ),
		'section'    => 'arnouv-theme_social_section',
		'settings'   => 'twitter_url'
	));

	$wp_customize->add_control('facebook_url', array(
		'label'      => __( 'Your Facebook URL', 'arnouv-theme' ),
		'section'    => 'arnouv-theme_social_section',
		'settings'   => 'facebook_url'
	));

	$wp_customize->add_control('instagram_url', array(
		'label'      => __( 'Your Instagram URL', 'arnouv-theme' ),
		'section'    => 'arnouv-theme_social_section',
		'settings'   => 'instagram_url'
	));

	$wp_customize->add_control('youtube_url', array(
		'label'      => __( 'Your YouTube URL', 'arnouv-theme' ),
		'section'    => 'arnouv-theme_social_section',
		'settings'   => 'youtube_url'
	));

	$wp_customize->add_section( 'arnouv-theme_images_section' , array(
		'title'      => __('Design pictures', 'arnouv-theme' ),
		'priority'   => 30
	));

	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'logo',
           array(
               'label'      => __( 'Upload a logo', 'arnouv-theme' ),
			   'description' => __('Brand logo should be 40 by 40 pixels', 'arnouv-theme' ),
               'section'    => 'arnouv-theme_images_section',
               'settings'   => 'logo_image' 
           )
       )
   );

   $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'separator',
           array(
               'label'      => __( 'Upload a separator', 'arnouv-theme' ),
			   'description' => __('Separator should be 1 by 6 pixels, using your theme colors.', 'arnouv-theme' ),
               'section'    => 'arnouv-theme_images_section',
               'settings'   => 'separator_image' 
           )
       )
   );

   $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'banner',
           array(
               'label'      => __( 'Upload a banner', 'arnouv-theme' ),
			   'description' => __('Banner should be 1920 by 300 pixels.', 'arnouv-theme' ),
               'section'    => 'arnouv-theme_images_section',
               'settings'   => 'banner_image' 
           )
       )
   );
}
add_action( 'customize_register', 'arnouv_customize_register' );


function arnouv_theme_setup(){
	load_theme_textdomain('arnouv-theme', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'arnouv_theme_setup');


function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


/**
* If more than one page exists, return TRUE.
* Used to know if the navigation links have to show
*/
function show_posts_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
}

/**
* Loading theme custom colors
*/
function arnouv_customizer_head_styles() {
	$light_color = get_theme_mod( 'light_color' );
	$dark_color = get_theme_mod( 'dark_color' );

	if(empty($light_color)) $light_color = '#43b5fb';
	if(empty($dark_color)) $dark_color = '#1355a9';

	$separator_image = get_theme_mod( 'separator_image' );
	$banner_image = get_theme_mod( 'banner_image' );
	
	?>
		<style type="text/css">
			/* Light color */
			a,
			.navbar-default .navbar-nav>li>a,
			.navbar>.container .navbar-brand,
			.navbar>.container-fluid .navbar-brand,
			.blog-title>h1
			{
				color: <?php echo $light_color; ?>;
			}

			.blog-description>p {
				background-color: <?php echo $light_color; ?>;
			}

			/* Dark color */
			h1, h2, h3, h4, h5, h6,
			a:hover,
			.navbar-default .navbar-nav>li>a:hover,
			.navbar-default .navbar-nav>.current_page_item>a,
			.navbar-default .navbar-nav>.current_page_item>a:hover,
			.blog-post-title a,
			.blog-post-title a:hover
			{
				color: <?php echo $dark_color; ?>;
			}

			article, footer, .navbar-default {
				background-image: url('<?php echo $separator_image; ?>');
				background-color: #fff;
				background-repeat: repeat-x;
			}

			.blog-header {
				background: url('<?php echo $banner_image; ?>') no-repeat fixed top center;
			}
		</style>
	<?php
}
add_action( 'wp_head', 'arnouv_customizer_head_styles' );

?>