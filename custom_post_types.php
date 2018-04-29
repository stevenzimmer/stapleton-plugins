<?php

	function register_post_types() {

		register_post_type(
			'articles',
			array(
				'show_in_rest' => true,
				'supports' => array('excerpt', 'title', 'editor', 'author', 'thumbnail'),
				'public' => true,
				'taxonomies' => array(
					'category'
				),
				'menu_icon' => 'dashicons-book',
				'labels' => array(
					'name' => 'Articles',
					'singular_name' => 'Article',
					'add_new_item'  => 'Add New Article',
					'all_items'		=> 'All Articles',
					'edit_item'		=> 'Edit Article'

				),
				'has_archive' => false,
				'menu_position' => 5

			)
		);

		register_post_type(
			'services',
			array(
				'show_in_rest' => true,
				'supports' => array('excerpt', 'title', 'editor'),
				'public' => true,
				'menu_icon' => 'dashicons-lightbulb',
				'labels' => array(
					'name' => 'Services',
					'singular_name' => 'Service',
					'add_new_item'  => 'Add New Service',
					'all_items'		=> 'All Services',
					'edit_item'		=> 'Edit Service'
				),
				'has_archive' => false,
				'menu_position' => 5
			)
		);

		register_post_type(
			'quotes',
			array(
				'show_in_rest' => false,
				'supports' => array('thumbnail', 'title', 'editor', 'excerpt'),
				'public' => true,
				'menu_icon' => 'dashicons-format-quote',
				'labels' => array(
					'name' => 'Quotes',
					'singular_name' => 'Quote',
					'add_new_item'  => 'Add New Quote',
					'all_items'		=> 'All Quotes',
					'edit_item'		=> 'Edit Quote',
					'featured_image' 		=> __('Headshot Image'),
					'set_featured_image' 	=> __('Upload Headshot')
				),
				'has_archive' => false,
				'menu_position' => 5
			)
		);

		register_post_type(
			'case-studies',
			array(
				'show_in_rest' => true,
				'supports' => array('thumbnail', 'title', 'editor', 'excerpt'),
				'public' => true,
				'menu_icon' => 'dashicons-media-text',
				'labels' => array(
					'name' => 'Case Studies',
					'singular_name' => 'Case Study',
					'add_new_item'  => 'Add New Case Study',
					'all_items'		=> 'All Case Studies',
					'edit_item'		=> 'Edit Case Study'
				),
				'has_archive' => false,
				'menu_position' => 5
			)
		);

		register_post_type(
			'consultants',
			array(
				'show_in_rest' => false,
				'supports' => array('thumbnail', 'title', 'editor', 'excerpt'),
				'public' => true,
				'menu_icon' => 'dashicons-universal-access',
				'labels' => array(
					'name' => 'Consultants',
					'singular_name' => 'Consultant',
					'add_new_item'  => 'Add New Consultant',
					'all_items'		=> 'All Consultants',
					'edit_item'		=> 'Edit Consultant',
					'featured_image' 		=> __('Headshot Image'),
					'set_featured_image' 	=> __('Upload Headshot')
				),
				'has_archive' => false,
				'menu_position' => 5
			)
		);

	}

	add_action( 'init', 'register_post_types' );
?>