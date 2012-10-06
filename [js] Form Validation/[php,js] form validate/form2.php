<?php
/*
echo filter_input(INPUT_GET,'name',FILTER_SANITIZE_STRING) . '<br/>';
echo filter_input(INPUT_GET,'age',FILTER_SANITIZE_NUMBER_INT);
*/


$args = array(
	'name' => FILTER_SANITIZE_STRING,
	'email' => FILTER_VALIDATE_EMAIL,
	'age' => FILTER_SANITIZE_NUMBER_INT,
	'subject' => FILTER_SANITIZE_STRING,
	'comments' => FILTER_SANITIZE_STRING
);

$res = filter_input_array(INPUT_GET,$args);


$msg = 'Fill the fields below';
foreach($res as $inp){
	if( $inp==''){
		$msg =  'form data not valid.';
		break ;
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RegExp Examlpe 1</title>
<style type="text/css">
body {
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:16px;
	line-height:170%;
}
fieldset {
	margin:0 auto;
	width:700px;
	padding:10px;
	border-radius: 10px;
	-moz-border-radius: 10px;
	border:#999 5px double;
	background-color:#FFF;
}
input[type="text"] {
	height:25px;
	width:200px;
	border-radius: 5px;
	-moz-border-radius: 5px;
	border:#999 1px solid;
	font-size:18px;
	padding:3px;
	box-shadow:#999 0 0 3px;
	-moz-box-shadow:#999 0 0 3px;
	margin:3px;
}
textarea {
	border-radius: 5px;
	-moz-border-radius: 5px;
	font-size:18px;
	padding:3px;
	margin:3px;
}
div#buttons input {
	width:100px;
	border-radius: 5px;
	-moz-border-radius: 5px;
	font-size:18px;
	padding:3px;
	margin:3px;
	background-color:#AABC2C;
	color:#FFF;
	cursor: pointer;
}
div#contact {
	margin:10px auto;
	width:850px;
	padding:20px;
	border-radius: 10px;
	-moz-border-radius: 10px;
	border:#999 5px double;
	background:#f5f5f5;
	text-shadow:#FFF 1px 1px;
}
div#container {
	margin:20px auto;
	width:750px;
	padding:10px;
	border-radius: 10px;
	-moz-border-radius: 10px;
	border:0;
	box-shadow:#999 0 5px 10px;
	-moz-box-shadow:#999 0 5px 10px;
}
div#buttons {
	text-align:right;
}
div#inputs {
	margin-left:80px;
}
div.details {
	float:left;
	line-height:40px;
}
span.err, span.msg {
	border-radius: 5px;
	-moz-border-radius: 5px;
	text-shadow:#666 1px 1px;
	padding:0 5px;
	font-weight: bold;
}
span.err {
	color:#FFF;
	background-color:#F30;
}
span.msg {
	color:#FFF;
	background-color:#aaa;
}
div#inputs .default {
	border:#999 1px solid;
	box-shadow:#999 0 0 3px;
	-moz-box-shadow:#999 0 0 3px;
}
div#inputs .active {
	border:#666 1px solid;
	box-shadow:#666 0 0 3px;
	-moz-box-shadow:#666 0 0 3px;
}
div#inputs .err {
	border:#F00 1px solid;
	box-shadow:#F00 0 0 3px;
	-moz-box-shadow:#F00 0 0 3px;
}
</style>
<script type="text/javascript" src="validate2.js"></script>
</head>

<body>
<div id="contact">
  <h1>Contact Us:</h1>
  <div id="container">
    <form name="frm" onsubmit="//return checkform(this)">
      <fieldset>
        <legend><?php echo $msg; ?></legend>
        <div class="details"> Name:<br />
          E-Mail:<br />
          Age:<br />
          Subject:<br />
          Message: </div>
        <div id="inputs">
          <input type="text" name="name" class="default" onblur="require(this,3)" value="<?php echo $_REQUEST['name']; ?>" />
          <span id="name_err" class="msg">You shall not enter any integer character!</span><br />
          <input type="text" name="email" class="default" onblur="require(this,7)" value="<?php echo $_REQUEST['email']; ?>" />
          <span id="email_err" class="msg">The E-mail you entered is NOT valid!</span><br />
          <input type="text" name="age" class="default" onblur="checkNumber(this,13,99)" value="<?php echo $_REQUEST['age']; ?>" />
          <span id="age_err" class="msg">You must enter integer characters up to 11!</span><br />
          <input type="text" name="subject" class="default" onblur="require(this)" value="<?php echo $_REQUEST['subject']; ?>" />
          <span id="subject_err" class="msg">You must enter sth. in this field!</span><br />
          <textarea  name="comments" style="width:600px; height:200px" class="default" onblur="require(this)"><?php echo $_REQUEST['comments']; ?></textarea>
          <br />
          <span id="comments_err" class="msg">You must enter sth. in this field!</span> </div>
        <div id="buttons">
          <input type="reset" value="Reset" name="reset" />
          <input type="submit" value="Send" name="submit" />
        </div>
      </fieldset>
    </form>
  </div>
</div>
<?php
// for test
echo '<pre>';
print_r($res);
echo '</pre>';
?>
</body>
</html>
