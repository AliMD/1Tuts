<?php
	get_header();

	get_template_part('menu', 'top');
?>
	<div class="container-contents">
		<?php
			get_sidebar('right');
		?>
		<div class="content mr7">
		<?php
			get_template_part('content', 'page');
		?>
		</div>
		<div class="clear"></div>
	</div>
	<div class="container-widgets"></div>
<?php
	get_footer();
?>
