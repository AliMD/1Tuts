<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title></title>
</head>
<body>
Image <br/>

<?php
	$pic = @fopen('pic.png', 'r') or die("Error in opening file.");

	$buffer='';
	while(!feof($pic)){
		$buffer.=fread($pic, 1024);
	}

	$b64 = base64_encode($buffer);

	echo "<img src='data:image/png;base64,$b64' />";
?>


</body>
</html>