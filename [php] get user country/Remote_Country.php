<?php
	$api_url = 'http://api.hostip.info/country.php';

	$remote_ip = $_SERVER['REMOTE_ADDR'];

	$country = file_get_contents("$api_url?ip=$remote_ip");

	if($country=='XX') $country = 'Local or iran !';

	echo "country : $country";