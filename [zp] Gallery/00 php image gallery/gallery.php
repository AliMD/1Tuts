<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title>00 PHP Image Gallery</title>
	<link rel="stylesheet" type="text/css" href="../reset.css" />
	<link rel="stylesheet" type="text/css" href="gallery.css" />
	<script type="text/javascript" src="../zepto.js"></script>
	<script type="text/javascript" src="gallery.js"></script>
</head>
<body>
	<div class="container">
		<div class="gallery">
			<?php
				$images_path = "../images";

				$images = scandir($images_path);
				foreach ($images as $img) {
					$exp = explode('.', $img);
					$img_type = end($exp);
					if($img_type == 'jpg')
						echo "<a href='$images_path/$img'><img src='$images_path/small/$img' alt='Image Gallery' /></a>";
				}
			?>

		</div>
	</div>
</body>
</html>