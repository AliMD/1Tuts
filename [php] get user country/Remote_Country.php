<?php

$api_url = "http://api.hostip.info/country.php";
$country = file_get_contents("$api_url?ip=$_SERVER[REMOTE_ADDR]");

echo "country : $country";