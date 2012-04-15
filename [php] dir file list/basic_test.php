<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
div.gallery{
	margin-left:50px;
}
div.gallery img{
	display:block;
	margin-top:10px;
}
</style>
</head>

<body>
<div class="gallery">
<?php

$d = dir("./images");

while($f = $d->read()){
	if( strtolower(substr($f,-4)) != '.jpg' ) continue;
	echo "<img src='images/$f' />";
}

?>
</div>
</body>
</html>