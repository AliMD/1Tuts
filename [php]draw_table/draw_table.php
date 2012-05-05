<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Draw Table</title>
<link type="text/css" rel="stylesheet" href="style.css" />
</head>

<body>
<div class="link">
<?php

if( isset($_GET['col']) && isset($_GET['row']) ){

	$col = $_GET['col'];
	$row = $_GET['row'];
	
	echo '<table class="mult" border="1" >';
	for($i=0;$i<$row;$i++){
		echo '<tr>';
		for($j=0;$j<$col;$j++){
			$k = $i*$j;
			echo "<td>$k</td>";
		}
		echo '</tr>';
	}
	echo '</table>';

}else{
	echo 'Err in data ...';
}
?>

	<a href="./">New table</a>
</div>
</body>
</html>