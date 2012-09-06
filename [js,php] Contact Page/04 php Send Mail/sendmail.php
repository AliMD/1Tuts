<?php

error_reporting(E_ALL ^ E_NOTICE);

$name    = $_POST['name'];
$email   = $_POST['mail'];
$subject = $_POST['subject'];
$text    = $_POST['txt'];

if( strlen($name) > 2 && strlen($email)>6 && strlen($subject)>5 && strlen($text)>10 ){
	// send
}else{
	echo '<h2>Access Restricted !</h2>';
}