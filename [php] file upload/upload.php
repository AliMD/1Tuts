<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Oontitled Document</title>
</head>
<body>

<div class="uploaded">
<?php

function upload_img($dir_path, $size_limit){

	$file = $_FILES['myfile'];
	$size_limit *=1024; // to KB

	if( $file['error'] !== 0 ){
		echo 'Error in uploading.';
		return false;
	}

	if( substr($file['type'],0,6) != 'image/' ){
		echo 'Error in file type.';
		return false;
	}

	if( $file['size'] > $size_limit ){
		echo 'Error in file size.';
		return false;
	}

	$file_path = "$dir_path/$file[name]"; // "" baraye name dige lazem nist chon kolan too "" hastesh
 	move_uploaded_file ($file['tmp_name'], $file_path);

	return $file_path;
}

$img = upload('./uploaded',200);

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