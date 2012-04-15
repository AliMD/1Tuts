<?php get_header(); ?>

<?php get_sidebar("left"); ?>
  
<div class="content">

	<?php if(have_posts()){ while(have_posts()){ the_post(); ?>
		<div class="post">
			<h2><?php the_title(); ?></h2>
			<h4><?php the_time("j F y"); ?></h4>
			<p><?php the_content(__("(more...)")); ?></p>
		</div>
	<?php }} else { ?>
		<div class="err"> <?php _e("Sorry, no posts matched your criteria."); ?> </div>
	<?php } ?>
	
	
</div>

<?php get_footer(); ?>