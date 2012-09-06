<?php

error_reporting(E_ALL ^ E_NOTICE);

$admin = 'info@mydomain.com';

$name    = $_POST['name'];
$email   = $_POST['mail'];
$subject = $_POST['subject'];
$text    = $_POST['txt'];

if( strlen($name)>=3 && strlen($email)>=7 && strlen($subject)>=5 && strlen($text)>=10 ){
	if( @mail (
			$admin,
			"mydomain.com contact : $subject",
			$text,
			"From:$name <$email" )
	){
		echo '<h2>Mail sent</h2>';
	}else{
		echo '<h2>Error in sending mail.</h2>';
	}
}else{
	echo '<h2>Access Restricted !</h2>';
}

?>
