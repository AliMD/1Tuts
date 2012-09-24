<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title></title>
</head>
<body>
Image :

<?php
	$f1 = @fopen('temp.txt', 'r') or die("Error in opening file.");

	while(!feof($f1)){
		$line = fgets($f1);
		echo "$line<br />";
	}
?>


</body>
</html>