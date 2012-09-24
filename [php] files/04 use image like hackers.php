<?php
if(isset($_GET['p'])){

	$file_name = $_GET['p'];
	
	$pic = file_get_contents( $file_name );

	$exp = explode('.', $file_name);
	$type = end( $exp );

	header("Content-Type: image/$type");

	echo $pic;


	die(); // prevent to send html codes;
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title></title>
</head>
<body>
Image <br />
<img src="04 use image like hackers.php?p=pic.png" />
<br />
<img src="04 use image like hackers.php?p=pic2.png" />
</body>
</html>