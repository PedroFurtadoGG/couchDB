<?php
 
$ch = curl_init();
 
$documentID = '1';
 
curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:5984/user/'.$documentID);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	'Content-type: application/json',
	'Accept: */*'
));
 
curl_setopt($ch, CURLOPT_USERPWD, 'admin:admin');
 
$response = curl_exec($ch);
echo $response;
 curl_close($ch);