<?php
 
$ch = curl_init();
 
$database = 'user';
$documentID = '1519493641';
$revision = '1-669dbdfbd86379ce70e84aa60340f79b';
 
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
/*
string(69) "{"ok":true,"id":"ajzele","rev":"8-80af68b3814813ebc57bb70e73b8524a"} "
*/