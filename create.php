<?php
 
$ch = curl_init();
$adm = 'admin';
$passAdm = 'admin';
$user = array(
	'id' => '1',
	'nome' => 'Jurandir',
	'sobrenome' => 'Fonseca',
	'usuario' => 'juras',
	'email' => 'jurandir@gmail.com',
	'pass' => md5('123456')
);
 
$payload = json_encode($user);
 
curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:5984/user/'.$user['id']);

$x = curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');

curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	'Content-type: application/json',
	'Accept: */*'
));
 
curl_setopt($ch, CURLOPT_USERPWD, $adm.':'.$passAdm);
 
$response = curl_exec($ch);
echo $response;
curl_close($ch);