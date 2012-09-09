<div class="content">
	<?php
		if( have_posts() ) {
			the_post();

			$meta = get_post_custom();
	?>
		<article>
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
			<?php
				if( count($meta['price'])>0 ){
					$price = $meta['price'][0];
					echo "<p>Price : <b>$price$</b></p>";
				}

				if(count($meta['img'])>0){
					echo "<div class='post_images'>";
					foreach ($meta['img'] as $img) {
						echo "<img src='$img' width='150' />";
					}
					echo "</div>";
				}
			?>
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