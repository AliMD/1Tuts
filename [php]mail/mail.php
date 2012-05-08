<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>

<?php
	if ( isset($_POST['fullName']) && isset($_POST['mail']) && isset($_POST['subject']) && isset($_POST['msg']) ){
		$name = $_POST['fullName'];
		$mail = $_POST['mail'];
		$subject = $_POST['subject'];
		$msg = $_POST['msg'];
		if( @mail('aghasizadeh70@gmail.com',$subject,'Name: '.$name. "\n" .$msg,"From:info@aghasizadeh.com\nReply-To:".$mail) ){
			echo '<h1 style="text-align:center;">Your massage has been sent. Please be patient for the answer. thank you!</h1>';
		}else{
			echo '<h1 style="text-align:center;">Your massage has not been sent. Please fill the form again. thank you!</h1>';
		}
	}
?>

</body>
</html>