<?php
// Set timezone for probable usage.
date_default_timezone_set('Asia/Tehran');

// Assign valid types
$valid_mime = array(
	'image/jpeg',
	'image/pjpeg',
	'image/jpeg',            
	'image/png',
	'image/gif'
);

function upload($files, $dir, $size_limit=1024, $prevent_duplicate=false){
	global $valid_mime;
	
	// $files must be given.
	if(!isset($files)) return false;
	
	// Look for $valid_mime array.
	isset($valid_mime) and is_array($valid_mime) or die('Error in data resources, valid_mime array not found.');
	
	// Make directory if not exists. set permission to 0777.
	is_dir($dir) and chmod($dir, 0777) or mkdir($dir, 0777, true);
		
	$count = 1;
	foreach($files as $file){
		$file['error'] === UPLOAD_ERR_OK or die('Error in uploading file(s).');
		
		// Check uploaded-file type.
		in_array($file['type'], $valid_mime) or die();
		
		// Set size_limit in KB.
		$file['size'] > $size_limit*1024 and die('The uploaded file exceeds the maximum file size.');
		
		// Prevent duplicate filenames.
		$prefix = ($prevent_duplicate == true) ? time().'_' : '';
		$suffix = ($prevent_duplicate == true) ? '_'.$count++ : '';
		
		$file_extension = strrchr($file['name'], '.');
		$filename = basename($file['name'], $file_extension);
		
		$file_path = "{$dir}/{$prefix}{$filename}{$suffix}{$file_extension}";
		
		// Move uploaded-file from php temp folder to desire one.
		move_uploaded_file($file["tmp_name"], $file_path);
		
		// Make an array of filepaths
		$output[] = $file_path;
	}
	
	// Change permission of folder according to security issues.
	chmod($dir, 0755);
	
	return $output;	
}
/////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////  Controller Section  ////////////////////////////////

// Assign tmp_arr from $_FILES['myfile'] and do die if there is any problem.
$tmp_arr = (isset($_POST['submit']) and isset($_FILES['myfile'])) ? $_FILES['myfile'] : die('Error in posting data.');

// Create an array with desired structure.
for($i=0; $i<count($tmp_arr['name']); $i++){
	$files[] = array(
		'name'		=>	$tmp_arr['name'][$i],
		'type'		=>	$tmp_arr['type'][$i],
		'tmp_name'	=>	$tmp_arr['tmp_name'][$i],
		'error'		=>	$tmp_arr['error'][$i],
		'size'		=>	$tmp_arr['size'][$i],
	);
}

// size_limit in KB
$path_arr = upload($files, './public', 1024, true);

// SEE WHAT HAPPENS ;)
echo '<pre>';
var_export($path_arr);