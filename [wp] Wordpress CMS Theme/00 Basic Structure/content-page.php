<div class="content">
	<?php
		if( have_posts() ) {
	?>

		<?php the_post(); ?>
		<article>
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		</article>

	<?php
		} else {
	?>
		<article>
			<h1>Page not Found</h1>
			<p>The requested URL was not found on this server. If you entered the URL manually please check your spelling and try again.</p>
		<article>
	<?php
		}
	?>
</div>