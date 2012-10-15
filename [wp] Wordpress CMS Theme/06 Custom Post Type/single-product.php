<?php

	$template = 'default';

	get_template_part('header'); // header.php

	get_template_part('sidebar', 'left'); // sidebar-left.php
?>
<div class="content">
	<?php
		//query_posts(array('post_type' => 'product'));
		while(have_posts()){
			the_post();
	?>
			<article>
				<h1><?php the_title(); ?></h1>
				<figure><?php the_post_thumbnail(); ?></figure>
				<p>
					<?php the_content() ?>
					Price : <b><?php echo get_post_meta(get_the_ID(),'product_price',true); ?>$</b>
				</p>
			</article>
	<?php
		};
	?>
</div>
<?php
get_template_part('footer');
?>