<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Oontitled Document</title>
</head>
<body>

<div class="uploaded">
<?php
	
	$myfile = $_FILES['myfile'];

	$myfile['error'] === 0 or die("Error in uploading file.");

	$r = rand(0,1000);
	$img = "./upload/$r-$myfile[name]";

	move_uploaded_file($myfile['tmp_name'], $img );

	echo "<img src='$img' width='400' />";

?>
</div>

<pre>
<?php
	print_r($_FILES);
?>
</pre>

</body>
</html>