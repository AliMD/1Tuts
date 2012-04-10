<div class="sidebar1">
  <?php wp_nav_menu(array("menu_class"=>"nav")) ?>
	<h2><?php _e('Categories'); ?></h2>
	<ul>
		<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
	</ul>
	<br>
    <p> The above links demonstrate a basic navigational structure using an unordered list styled with CSS. Use this as a starting point and modify the properties to produce your own unique look. If you require flyout menus, create your own using a Spry menu, a menu widget from Adobe's Exchange or a variety of other javascript or CSS solutions.</p>
    <p>If you would like the navigation along the top, simply move the ul.nav to the top of the page and recreate the styling.</p>
    <!-- end .sidebar1 --></div>