<!DOCTYPE html>
<html <?php language_attributes(); // get dir and lang from wp config ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); // get charset from wp config ?>" />
	<title><?php
		wp_title("|",true,'right');
		bloginfo("name");
	?></title>
	<link type="text/css" rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>" />
</head>

<body>

<div class="container">
	<div class="header"><a href="#"><img src="" alt="Insert Logo Here" name="Insert_logo" width="20%" height="90" id="Insert_logo" style="background: #8090AB; display:block;" /></a> 
	</div>
