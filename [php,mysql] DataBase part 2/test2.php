<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Oontitled Document</title>
</head>
<body>
<?php

require_once 'db2.php';

db_connect();

$books = db_getrows('products');

db_close();

print_table($books);

?>
</body>
</html>