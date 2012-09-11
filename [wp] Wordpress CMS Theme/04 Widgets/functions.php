<?php

	add_theme_support('menus');

	register_sidebar(array(
		'name' => 'Sidebar Right',
		'id' => 'sidebar-r',
		'description' => 'Right Panel ...',
		'before_widget' => '<article class="widget %2$s">',
		'after_widget' => "</article>\n",
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n"
	));
	
	
	