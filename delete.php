<?php
 
$ch = curl_init();
 
$database = 'user';
$documentID = '1';
$revision = '2-0097247190ab1c95c35cbec5d4bfb6cb';
 
curl_setopt($ch, CURLOPT_URL, sprintf('http://127.0.0.1:5984/%s/%s?rev=%s', $database, $documentID, $revision));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	'Content-type: application/json',
	'Accept: */*'
));
 
curl_setopt($ch, CURLOPT_USERPWD, 'admin:admin');
 
$response = curl_exec($ch);
echo $response;
curl_close($ch);