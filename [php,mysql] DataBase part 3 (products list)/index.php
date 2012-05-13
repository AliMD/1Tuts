<?php
	require_once('inc/modules.php');

	include('inc/header.php');
?>


<div class='booklist'>
	<h1>Book List</h1>
<?php

db_connect();

$books = db_getrows('products');

show_array($books);

db_close();

?>
</div>


<?php
	include('inc/footer.php');
?>