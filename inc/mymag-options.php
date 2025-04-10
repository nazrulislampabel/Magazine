<?php
if (class_exists('CSF')){
	$prefix = 'mymag_options';

	CSF::createOptions($prefix,array(
		'menu_title'=>__('MY Theme option','mymag'),
		'menu_slug'=>'mymag-options',
		'framework_title'=> 'My Mag Options'
	));
	CSF::createSection( $prefix, array(
		'id'    => 'header_section',
		'title' => __( 'Header Section', 'mymag' )
	) );
	CSF::createSection( $prefix,
		array(
			'parent' => 'header_section',
			'title'  => __( 'Header info', 'mymag'),
			'fields'=>array(
				array(
					'id'=>'header_email',
					'title'=>__('Header Email','mymag'),
					'type'=>'text',
					'placeholder' => __('Please Write email address','mymag')
				),
				array(
					'id'=>'header_right_number',
					'title'=>__('Header right Number','mymag'),
					'type'=>'text'
				),
			)
		) );
	//about page section
	CSF::createSection( $prefix, array(
		'id'    => 'about-page-section',
		'title' => __( 'About Page', 'mymag' )
	) );
	//	Info section
	CSF::createSection( $prefix, array(
		'parent'=>'about-page-section',
		'id'    => 'info',
		'title' => __( 'Info 1Section', 'mymag' ),
		'fields'=>  array(
			array(
				'id'=>'info_title',
				'title'=>__('Info Heading'),
				'type'=>'text',
			),
			array(
				'id'=>'info_sub_title',
				'title'=>__('Info Description'),
				'type'=>'textarea',
			),
			array(
				'id'        => 'single_service',
				'type'      => 'group',
				'button_title'=>__('Add new service','mymag'),
				'title'     => __('Single service','mymag'),
				'fields'    => array(
					array(
						'id'    => 'single_service_icon',
						'title' => 'Service icon',
						'type' => 'select',
						'options'=>array(
							'lnr lnr-diamond'=>__('diamond','mymag'),
							'lnr lnr lnr-phone'=>__('phone','mymag'),
							'lnr lnr-d'=>__('diamond','mymag'),
						)
					),
					array(
						'id'    => 'single_service_title',
						'type'  => 'text',
						'title' => 'Single Service Title',
					),
					array(
						'id'    => 'single_service_des',
						'type'  => 'textarea',
						'title' => 'Single Service Description',
					),
				),
			),
		)
	) );
	//	Feedback section
	CSF::createSection( $prefix, array(
		'parent'=>'about-page-section',
		'id'    => 'feedback-area',
		'title' => __( 'Feedback Section', 'mymag'),
		'fields'=>array(
			array(
				'id'=>'feedback_tittle',
				'type'=>'text',
				'title'=>__('Feedback Heading','mymag'),
			),
			array(
				'id'=>'feedback_sub_tittle',
				'type'=>'text',
				'title'=>__('Feedback Sub Heading','mymag'),
			),
			array(
				'id'=>'feedback',
				'title'=>__('Feedback','mymag'),
				'type'=>'group',
				'fields'=>array(
					array(
						'id'=>'feedback',
						'title'=>__('Feedback Title','mymag'),
						'type'=>'text',
					),
					array(
						'id'=>'feedback_des',
						'title'=>__('Feedback Description','mymag'),
						'type'=>'textarea',
					),
				)
			),
		)
	) );
	CSF::createSection( $prefix, array(
		'parent'=>'about-page-section',
		'id'    => 'testimonial',
		'title' => __( 'Testimonial Section', 'mymag' ),
		'fields'=>array(
			array(
				'id'=>'testimonial_tittle',
				'type'=>'text',
				'title'=>__('Testimonial Heading','mymag')
			),
			array(
				'id'=>'testimonial_sub_tittle',
				'type'=>'text',
				'title'=>__('Testimonial Sub Heading','mymag')
			),
			array(
				'id'=>'single_testimonial',
				'title'=>__('Feedback','mymag'),
				'type'=>'group',
				'fields'=>array(
					array(
						'id'=>'client_img',
						'title'=>__('Client Image','mymag'),
						'type'=>'upload',
					),
					array(
						'id'=>'client_name',
						'title'=>__('Client Name','mymag'),
						'type'=>'text',
					),
					array(
						'id'=>'client_pos',
						'title'=>__('Client Position','mymag'),
						'type'=>'text',
					),
					array(
						'id'=>'client_fed',
						'title'=>__('Client Feedback','mymag'),
						'type'=>'textarea',
					),
				)
			),
		)
	) );
	/*brand section*/
	CSF::createSection($prefix,array(
		'parent'=>'about-page-section',
		'id'    => 'brand-area',
		'title' => __( 'Brand Section', 'mymag'),
		'fields'=>array(
			array(
				'id'=>'single_brands',
				'title'=>__('brand','mymag'),
				'type'=>'group',
				'button_title'=>__( 'Add New Brand', 'mymag'),
				'fields'=>array(
					array(
						'id'=>'brand_img',
						'title'=>__('Brand Image','mymag'),
						'type'=>'upload',
					),
				)
			),
		)
));
	//
	// Set a unique slug-like ID
	$prefix = 'my_post_options';

	//
	// Create a metabox
	CSF::createMetabox( $prefix, array(
		'title'     => __('My Page Meta info','mymag'),
		'id'=>'my_page_metabox',
		'context' => 'normal',
		'post_type' => 'page',
	) );

	//
	// Create a section
	CSF::createSection( $prefix, array(
		'title'  => 'Tab Title 1',
		'parent'=>'my_page_metabox',
		'fields' => array(

			//
			// A text field
			array(
				'id'    => 'page-head',
				'type'  => 'text',
				'title' => 'Simple Text',
			),

		)
	) );

	//
	// Create a section
	CSF::createSection( $prefix, array(
		'title'  => __('My text'),
		'parent'=>'my_page_metabox',
		'fields' => array(

			// A textarea field
			array(
				'id'    => 'page-teaser',
				'type'  => 'textarea',
				'title' => 'Simple Textarea',
			),

		)
	) );

}
