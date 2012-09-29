<?php

require_once('inc/db.php');

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


function show_books($books){
	foreach($books as $book){
		echo "
		<div class='book'>
			<h2 class='title'>$book[name]</h2>
			<img class='pic' src='images/$book[img]' alt='$book[name]' />
			<div class='text'>
				<span class='author'>Author : $book[author]</span>
				$book[desc]
				<span class='price'>$book[price] $</span>
			</div>
			<div class='clear'></div>
		</div>
		";
	}

}

function insert_book($name, $author, $desc, $price=0, $img=''){
	db_query("INSERT INTO products VALUES(NULL, '$name', '$author', '$desc', $price, '$img')");
}