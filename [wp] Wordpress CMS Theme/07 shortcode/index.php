<?php

	$template = 'default';

	get_template_part('header'); // header.php

	get_template_part('sidebar', 'left'); // sidebar-left.php

	get_template_part('content', get_post_type($post->ID)); // content-page.php or content-book.php

	get_template_part('footer');