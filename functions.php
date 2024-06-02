<?php 


	function scemantics_enqueue_scripts(){
		wp_enqueue_style('stylesheet', get_template_directory_uri().'/style.css', array());
		wp_enqueue_script('new-script',get_template_directory_uri().'/dist/js/script.js', array());
	}

	add_action('wp_enqueue_scripts','scemantics_enqueue_scripts');


	function scemantics_menus(){
		$locations = array(
			'primary-menu' => 'Header Menu',
		);
		register_nav_menus($locations);
	}

	add_action('init', 'scemantics_menus');

	function add_additional_class_on_a($classes,$item,$args) {
		if(isset($args->add_a_class)){
			$classses['class'] = $args->add_a_class;
		}

		return $classes;
	}

	function add_additional_class_on_li($classes,$item,$args) {
		if(isset($args->add_li_class)){
			$classses['class'] = $args->add_li_class;
		}

		return $classes;
	}

	add_filter('nav_menu_link_attributes', 'add_additional_class_on_a',1,3);
	add_filter('nav_menu_css_class', 'add_additional_class_on_li',1,3);


	add_theme_support('custom-background');
	add_theme_support('custom-header');
	add_theme_support('custom-logo');

	function semantics_hero_text($wp_customize){
		$wp_customize->add_section('semantics-hero-text-section',array(
			'title' => 'Header text',
		));
		//header-text
		$wp_customize->add_setting('semantics-hero-text-setting',array(
			'default' => 'Add Your Text Here',
		));
		$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			'semantics-header-text-control',
			array(
				'label'    => 'Header Text',
				'section'  => 'semantics-hero-text-section',
				'settings' => 'semantics-hero-text-setting'
			)
			));


		//secondary text
		$wp_customize->add_setting('semantics-hero-secondary-text-setting',array(
			'default' => 'Add Your Text Here',
		));
		$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			'semantics-header-secondary-text-control',
			array(
				'label'    => 'Header Text',
				'section'  => 'semantics-hero-text-section',
				'settings' => 'semantics-hero-secondary-text-setting'
			)
			));
	}


	function semantics_header_additional_info($wp_customize){
		$wp_customize->add_section('semantics-header-addInfo-section',array(
			'title' => 'Header Info',
		));
	
		//address
		$wp_customize->add_setting('semantics-header-addInfo-location-setting',array(
			'default' => 'Add Address'
		));

		$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			'semantics-header-addInfo-location-control', 
			array(
				'label'    => 'Company Address',
				'section'  => 'semantics-header-addInfo-section',
				'settings' => 'semantics-header-addInfo-location-setting'
			)
			));

		//working times and days
		$wp_customize->add_setting('semantics-header-addInfo-working-setting',array(
			'default' => 'Add Workings'
		));

		$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			'semantics-header-addInfo-working-control', 
			array(
				'label'   => 'Company Working Hours',
				'section' => 'semantics-header-addInfo-section',
				'settings' => 'semantics-header-addInfo-working-setting'
			)
			));

		//contact info
		$wp_customize->add_setting('semantics-header-addInfo-contact-setting',array(
			'default' => 'Add Contact Info'
		));

		$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			'semantics-header-addInfo-contact-control', 
			array(
				'label'   => 'Company Contact',
				'section' => 'semantics-header-addInfo-section',
				'settings' => 'semantics-header-addInfo-contact-setting'
			)
			));
	}


	add_action('customize_register','semantics_header_additional_info');
	add_action('customize_register','semantics_hero_text');