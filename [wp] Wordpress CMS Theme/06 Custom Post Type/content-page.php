<div class="content">
<?php
	if( have_posts() ) {
		the_post();
?>
		<article>
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		</article>
<?php
	}
?>
</div>