<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title></title>
</head>
<body>
<?php
require_once('inc/modules.php');

$name   = $_POST['name'];
$author = $_POST['author'];
$desc   = $_POST['desc'];
$price  = $_POST['price'];

if( strlen($name)>=5 && strlen($author)>=7 && strlen($desc)>=10 && strlen($price)>=1 ){

	db_connect();

	insert_book($name, $author, $desc, $price);

	db_close();

	echo '<h2 class="ok">Book Added.</h2>';

}else{
	echo '<h2 class="err">Error in your data ...</h2>';
}
?>
</body>
</html>