<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Send Mail</title>
</head>

<body>

<?php
	if(isset($_POST['name'])  && isset($_POST['subject']) && isset($_POST['txt'])){
		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$txt = $_POST['txt'];
		if(@mail('zohreh_zahedi16@yahoo.com',$subject,'Name:'.$name."\n".$txt,"From:zz@yahoo.com")){
			echo '<h1 style="text-align:center;">Your massage has been sent. Please be patient for the answer. thank you!</h1>';
		}
		else{
			echo '<h1 style="text-align:center;">Your massage has not been sent. Please fill the form again. thank you!</h1>';
		}
	}
?>

</body>
</html>