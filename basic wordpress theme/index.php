<?php get_header(); ?>

<?php get_sidebar(); ?>
  
<div class="content">

	<?php if(have_posts()){ while(have_posts()){ the_post(); ?>
		<div class="post">
			<h2><?php the_title(); ?></h2>
			<p><?php the_content(__("(more...)")); ?></p>
		</div>
	<?php } }else{
		_e("Sorry, no posts matched your criteria.");
	}?>
	
</div>

<?php get_footer(); ?>