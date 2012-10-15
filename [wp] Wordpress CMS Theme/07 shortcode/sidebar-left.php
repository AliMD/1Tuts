<div class="sidebar1">
	<nav>
		<?php
			wp_nav_menu(array(
				'theme_location'  => 'mainmenu',
				'container'       => false, 
				'container_class' => '', 
				'menu_class'      => '', 
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul class="%2$s">%3$s</ul>'
			));
		?>
	</nav>
	<?php
    	dynamic_sidebar("Sidebar Left");
    ?>
</div>