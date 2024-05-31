<?php 


	function scemantics_enqueue_scripts(){
		wp_enqueue_style('stylesheet', get_template_directory_uri().'/style.css', array());
		wp_enqueue_script('new-script',get_template_directory_uri().'/dist/js/script.js', array());
	}

	add_action('wp_enqueue_scripts','scemantics_enqueue_scripts');