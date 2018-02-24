<?php
 
$ch = curl_init();
 
$user = array(
	'id' => '1',
	'nome' => 'Jurandir',
	'sobrenome' => 'Fonseca',
	'usuario' => 'juras',
	'email' => 'jurandir@gmail.com.br',
	'pass' => md5('123456')
);
 
$user['_rev'] = '1-b694f7c20265ff5b4d1949cae9035695';
 
$payload = json_encode($customer);
 
curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:5984/user/'.$user['id']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT'); /* or PUT */
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	'Content-type: application/json',
	'Accept: */*'
));
 
curl_setopt($ch, CURLOPT_USERPWD, 'admin:admin');
 
$response = curl_exec($ch);
echo $response;
curl_close($ch);