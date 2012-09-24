<?php
	$pic = @fopen('pic.png', 'r') or die("Error in opening file.");

	$buffer='';
	while(!feof($pic)){
		$buffer.=fread($pic, 1024);
	}

	header("Content-Type: image/png");

	echo $buffer;

