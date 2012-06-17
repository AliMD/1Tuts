<?php
	if(have_posts()){
		while(have_posts()){
			the_post();
?>
<article class='post'>
	<h2><?php the_title(); ?></h2>
	<?php
		$pics = get_post_meta($post->ID,'pic');
		if( count($pics)>0 ){
	?>
		<div class="pics">
		<?php
			
			foreach($pics as $pic){
				echo "<img src='$pic' />";
			}
		?>
		</div>
	<?php } ?>
	<p>
		<?php the_content(); ?>
	</p>
	<?php 
		$price = get_post_meta($post->ID,'price',true);

		if( $price!=null ){
	?>
		<div class="price">
			Price : <?php echo $price; ?>
		</div>
	<?php } ?>
</article>
<?php
		}
	}else{
		echo 'Nothing ...';
	}
?>