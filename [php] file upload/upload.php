<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Oontitled Document</title>
</head>
<body>

<div class="uploaded">
<?php

function upload(){

	if( $_FILES['myfile']['error'] !== 0 ){
		echo 'Error in uploading.';
		return false;
	}

	if( $_FILES['myfile']['type'] != 'image/jpeg' ){
		echo 'Error in file type.';
		return false;
	}

	if( $_FILES['myfile']['size'] > 200*1024 ){
		echo 'Error in file size.';
		return false;
	}

	$file_path = './uploaded/'.$_FILES['myfile']['name'];
	move_uploaded_file($_FILES['myfile']['tmp_name'],$file_path );

	return $file_path;
}

$img = upload();

if($img) echo "Path : $img <br /> <img src='$img' width='300' />";


?>
</div>



<pre>



<?php
	print_r($_FILES);
?>
</pre>

</body>
</html>