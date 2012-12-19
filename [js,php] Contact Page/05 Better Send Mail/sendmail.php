<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title>Sending mail ...</title>
</head>
<body>
	<?php
		error_reporting(E_ALL ^ E_NOTICE);

		$admin = 'info@mydomain.com';

		$name    = $_POST['name'];
		$email   = $_POST['mail'];
		$subject = $_POST['subject'];
		$text    = "Mydomain.com Contact US :\r\n$_POST[txt]";

		if( strlen($name)>=3 && strlen($email)>=7 && strlen($subject)>=5 && strlen($text)>=10 ){
			if( @mail (
					$admin,
					"mydomain.com contact : $subject",
					$text,
					"From:contact@thisdomain.com\r\nReply-To:$name <$email>" );
			){
				echo '<h2>Mail sent</h2>';
			}else{
				echo '<h2>Error in sending mail.</h2>';
			}
		}else{
			echo '<h2>Access Restricted !</h2>';
		}
	?>

	<a href="./">Back</a>
</body>
</html>