<?php

$db = array(
	'con' => '',
	'name'   => 'ciw_database',
	'server' => 'localhost',
	'user'   => 'root',
	'pass'   => ''

);

function db_err(){
	$err_num = mysql_errno();
	$err_msg = mysql_error();
	die("Error $err_num: $err_msg");
}

function db_connect(){
	global $db;
	if($db['con']) return;
	$db['con'] = @mysql_connect($db['server'],$db['user'],$db['pass']) or db_err();
	@mysql_select_db($db['name'],$db['con']) or db_err();
}

function db_query($q){
	global $db;
	$res = @mysql_query($q,$db['con']) or db_err();
	return $res;
}

function db_close(){
	global $db;
	@mysql_close($db['con']);
}

function db_getrows($table){
	$res = db_query("SELECT * FROM $table");
	while($row=mysql_fetch_array($res,MYSQL_ASSOC)){
		$rows[] = $row; // append to last
	}
	return $rows;
}

function show_array($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

function show_table($rows){
	echo '<table border="1" >';

	echo "<tr>";
	foreach($rows[0] as $title=>$fields){
		echo "<th>$title</th>";
	}
	echo "</tr>";

	foreach($rows as $row){
		echo "<tr>";
		foreach($row as $fields){
			echo "<td>$fields</td>";
		}
		echo "</tr>";
	}

	echo '</table>';
}

function show_users($rows){
	echo '<table border="0" >';

	echo "<tr>";
	foreach($rows[0] as $title=>$fields){
		echo "<th>$title</th>";
	}
	echo "</tr>";

	foreach($rows as $row){
		echo "<tr>";
		foreach($row as $title=>$fields){
			if($title == 'img'){
				echo "<td><img src='images/$fields' width='128' height='128' alt='Profile Avatar' title='' /></td>";
			}else{
				echo "<td>$fields</td>";
			}
		}
		echo "</tr>";
	}

	echo '</table>';
}



