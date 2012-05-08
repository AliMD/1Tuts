<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Oontitled Document</title>
</head>
<body>
<?php

require_once('db.php');

db_connect();

$arr = db_getrows('addressbook');

show_table($arr);

show_array($arr);


db_close();

?>
</body>
</html>