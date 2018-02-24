<?php
$table = 'user';
$ch = curl_init();
 
curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:5984/'.$table);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, 'admin:admin');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	'Content-type: application/json',
	'Accept: */*'
));
 
$response = curl_exec($ch);
echo $response;
curl_close($ch);