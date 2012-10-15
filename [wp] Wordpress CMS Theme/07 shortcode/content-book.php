<div class="content">
<?php
	if( have_posts() ) {
		the_post();
?>
		<article>
			<h1>Book : <?php the_title(); ?></h1>
			<p><b>Desc :</b> <?php the_content(); ?></p>
		</article>
<?php
	}
?>
</div>