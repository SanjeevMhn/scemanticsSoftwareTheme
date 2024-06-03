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
	add_theme_support('post-thumbnails');

	require get_template_directory() . "/inc/customizer.php";
