<?php
	add_theme_support('menus');

	register_nav_menu('mainmenu', "Main Manu");

	register_sidebar(array(
		'name' => 'Sidebar Right',
		'id' => 'sidebar-r',
		'description' => 'Right panel ...',
		'before_widget' => '<article class="widget %2$s">',
		'after_widget' => "</article>\n",
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n"
	));

	register_sidebar(array(
		'name' => 'Sidebar Left',
		'id' => 'sidebar-l',
		'description' => 'Left panel after menu',
		'before_widget' => '<article class="widget %2$s">',
		'after_widget' => "</article>\n",
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n"
	));

	/*
	register_post_type("book", array(
		'public' => true,
		'label' => __('Books')
	));
	*/
	
	register_post_type("book", array(
		'public' => true,
		'supports' => array( 'title', 'editor', 'comments', 'custom-fields' ),
		'labels' => array(
			'name' => __('Books'),
		    'singular_name' => __('Book'),
		    'add_new' => __('Add New'),
		    'add_new_item' => __('Add New'),
		    'edit_item' => __('Edit Book'),
		    'new_item' => __('New Book'),
		    'all_items' => __('All Books'),
		    'view_item' => __('View Book'),
		    'search_items' => __('Search Books'),
		    'not_found' =>  __('No books found'),
		    'not_found_in_trash' => __('No books found in Trash'), 
		    'parent_item_colon' => '',
		    'menu_name' => __('Books')
		)
	));