<?php
	get_header();

	get_template_part('menu', 'top');
?>
	<div class="container-contents">
		<?php
			if($post->post_name != 'products' && $post->post_name != 'gallery'){
				get_sidebar('right');
			}
		?>
		<div class="content mr7">
		<?php
			if($post->post_name == 'gallery'){
				get_template_part('content', 'gallery');
			}else{
				get_template_part('content', 'page');
			}
		?>
		</div>
		<div class="clear"></div>
	</div>
	<div class="container-widgets"></div>
<?php
	get_footer();
?>