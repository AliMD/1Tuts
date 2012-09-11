<div class="sidebar1">
	<ul class="nav">
		<?php
			wp_list_pages(array(
				'title_li' => ''
			));
		?>
	</ul>
	<?php
    	dynamic_sidebar("Sidebar Left");
    ?>
</div>