<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Oontitled Document</title>
</head>
<body>
<?php

function db_err(){
	$err_num = mysql_errno();
	$err_msg = mysql_error();
	die("Error $err_num: $err_msg");
}

$db_con = @mysql_connect("localhost","root","") or db_err();

@mysql_select_db('mydb',$db_con) or db_err();

$res = @mysql_query("SELECT * FROM addressbook",$db_con) or db_err();

$row = mysql_fetch_array($res,MYSQL_ASSOC);

echo "$row[fname] $row[lname] $row[age] <br />";

@mysql_close($db_con);

?>
</body>
</html>