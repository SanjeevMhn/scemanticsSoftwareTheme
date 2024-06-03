<?php
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
				'label'    => 'Company Contact',
				'section'  => 'semantics-header-addInfo-section',
				'settings' => 'semantics-header-addInfo-contact-setting'
			)
			));
	}

	function semantics_footer_add_info($wp_customize){
		$wp_customize->add_section('semantics-footer-add-info',array(
			'title' => 'Footer Additional Info',
		));

		$wp_customize->add_setting('semantics-footer-desc-setting', array(
			'default' => 'Add Company Description'
		));

		$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			'semantics-footer-desc-control',
			array(
				'label'    => 'Company Description',
				'section'  => 'semantics-footer-add-info',
				'settings' => 'semantics-footer-desc-setting',
				'type'     => 'textarea'
			)
			));


		//social media links

		//instagram
		$wp_customize->add_setting('semantics-footer-social-instagram',array(
			'default' => 'Add Link to Instagram'
		));

		$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			'semantics-footer-social-instaram-control',
			array(
				'label' => 'Instagram Link',
				'section'  => 'semantics-footer-add-info',
				'settings' => 'semantics-footer-social-instagram',
			)
			));

		//facebook
		$wp_customize->add_setting('semantics-footer-social-facebook',array(
			'default' => 'Add Link to Facebook'
		));

		$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			'semantics-footer-social-facebook-control',
			array(
				'label' => 'Facebook Link',
				'section'  => 'semantics-footer-add-info',
				'settings' => 'semantics-footer-social-facebook',
			)
			));

		//linkedin
		$wp_customize->add_setting('semantics-footer-social-linkedin',array(
			'default' => 'Add Link to LinkedIn'
		));

		$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize,
			'semantics-footer-social-linkedin-control',
			array(
				'label' => 'Linkedin Link',
				'section'  => 'semantics-footer-add-info',
				'settings' => 'semantics-footer-social-linkedin',
			)
			));
	}

    function semantics_info_section($wp_customize){
        $wp_customize->add_section('semantics-info-section',array(
            'title' => 'Info Section'
        ));
        
        $wp_customize->add_setting('semantics-info-thumbnail-setting',array(
            'default' => ''
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'semantics-info-thumbnail-control',
            array(
                'label'    => 'Edit Info Image',
                'section'  => 'semantics-info-section',
                'settings' => 'semantics-info-thumbnail-setting',
            )
            ));

        $wp_customize->add_setting('semantics-info-header-text-setting',array(
            'default' => 'Add Info Header'
        ));

        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'semantics-info-header-text-control',
            array(
                'label'    => 'Add info header text',
                'section'  => 'semantics-info-section',
                'settings' => 'semantics-info-header-text-setting',
            )
            ));

        $wp_customize->add_setting('semantics-info-text-setting',array(
            'default' => 'Add Info Text'
        ));

        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'semantics-info-text-control',
            array(
                'label'    => 'Add info text',
                'section'  => 'semantics-info-section',
                'settings' => 'semantics-info-text-setting',
                'type'     => 'textarea'
            )
            ));
    }

    function semantics_company_facts($wp_customize){
        $wp_customize->add_section('sematics-company-facts-section',
        array(
            'title' => 'Company Facts'
        ));

        //clients
        $wp_customize->add_setting('semantics-company-clients-setting',array(
            'default' => ''
        ));

        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'semantics-company-clients-control',
            array(
                'label'    => 'Clients Number',
                'section'  => 'sematics-company-facts-section',
                'settings' => 'semantics-company-clients-setting'
            )
            ));

        //completed projects
        $wp_customize->add_setting('semantics-company-projects-setting',array(
            'default' => ''
        ));

        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'semantics-company-projects-control',
            array(
                'label'    => 'Completed Projects',
                'section'  => 'sematics-company-facts-section',
                'settings' => 'semantics-company-projects-setting'
            )
            ));

        //total employees
        $wp_customize->add_setting('semantics-company-employees-setting',array(
            'default' => ''
        ));

        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'semantics-company-employees-control',
            array(
                'label'    => 'Number of Employees',
                'section'  => 'sematics-company-facts-section',
                'settings' => 'semantics-company-employees-setting'
            )
            ));

        //satisfaction rate
        $wp_customize->add_setting('semantics-company-satisfaction-setting',array(
            'default' => ''
        ));

        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'semantics-company-satisfaction-control',
            array(
                'label'    => 'Satisfaction Rate',
                'section'  => 'sematics-company-facts-section',
                'settings' => 'semantics-company-satisfaction-setting'
            )
            ));

        //hours of work
        $wp_customize->add_setting('semantics-company-workhours-setting',array(
            'default' => ''
        ));

        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'semantics-company-workhours-control',
            array(
                'label'    => 'Hours of Work',
                'section'  => 'sematics-company-facts-section',
                'settings' => 'semantics-company-workhours-setting'
            )
            ));
    }


	add_action('customize_register','semantics_header_additional_info');
	add_action('customize_register','semantics_hero_text');
	add_action('customize_register','semantics_footer_add_info');
	add_action('customize_register','semantics_info_section');
	add_action('customize_register','semantics_company_facts');