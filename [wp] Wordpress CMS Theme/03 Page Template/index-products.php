<?php
	/*
		Template Name: Products
	*/

	$template = 'products';

	get_template_part('header');

	get_template_part('sidebar', 'left');

	get_template_part('content', 'products');

	get_template_part('sidebar', 'right');

	get_template_part('footer');
