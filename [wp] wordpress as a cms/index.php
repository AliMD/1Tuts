<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title>Oontitled Document</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/1styles.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css" />
</head>
<body>

<div class="container">
	<div class="container-top">
		<div class="toptooltip right">E: i@ali.md | T: 412 254-6563</div>
		<div class="clear"></div>
	</div>
	<div class="container-menu">
		
		<div class="topmenu right last">
			<ul>
				<?php
					wp_list_pages(array(
						'title_li'=>'',
						'depth'=>1
					));
				?>
			</ul>
			<div class="clear"></div>
		</div>
		<div class="logo w7 mra"><h1>SCOPE.</h1></div>
		<div class="clear"></div>
	</div>
	<div class="container-contents">
		<div class="sidebar w7 right last">bla bla bla</div>	
		<div class="content mr7">
		<?php if(have_posts()){ the_post(); ?>
			<div class="post">
				<h2><?php echo $post->post_title; ?></h2>
				<p><?php echo the_content(); ?></p>
			</div>
		<?php }else{
			echo 'Nothing !';
		} ?>

		<!--
		<pre><?php 
			print_r($post);
		?></pre>
		-->
		</div>
		<div class="clear"></div>
	</div>
	<div class="container-widgets"></div>
	<div class="container-footer"></div>
</div>
<div class="backimage"></div>
</body>
</html>