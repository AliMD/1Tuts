<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>oontitle document</title>
	<style type="text/css">
		*{
			padding:0;
			margin:0;
		}
		div.container{
			width:950px;
			margin:0 auto;
		}
		div.gallery{
			margin-left: 20px;
		}
		div.gallery img{
			display: block;
			margin-top: 5px;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="gallery">
	<?php
		
		$dir = './images';
		$allowed_type = array('jpg','jpeg','png','gif');

		$d = dir($dir);
		while( $f = $d->read() ){
			$ftype = end(explode('.', $f));
			if( !in_array( strtolower($ftype),$allowed_type) ) continue;
			echo "<img src='$dir/$f' />";
		}

	?>
	</div>
</div>
</body>
</html>