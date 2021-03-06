<?php
require_once('curl.php');

$methods = [
	'get' => [
		'url' => 'http://ed.com/1.0/member',
		'method' => 'GET',
		'param' => [
			'category_id' => 2,
			'object_id' => 2
		],
	],
	
	'create' => [
		'url' => 'http://ed.com/1.0/member',
		'method' => 'POST',
		'param' => [
			'category_id' => 2,
			'object_id' => 2
		],
	],

];

foreach ($methods as $key => $method) {
	try {
	$response = curl::request($method['method'], $method['url'])
			  ->set_timeout(60)
			  ->set_header('Authorization', 'Bearer mF9B5f41JqM')
			  ->set_parameter($method['param'])
			  ->set_attempts(1)
			  ->execute();
	} catch (CurlException $e) {
		$response = $e;
	}

	var_dump($response);
	//var_dump($method, $response);
}