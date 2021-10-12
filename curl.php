<?php
$headers = array(
    'Content-Type: application/json',
    'Authorization: Bearer [token]'
);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://felix.gemeente.nl/api/v1/publication');
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($curl, CURLOPT_USERAGENT, 'curl/7.75.0');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($curl);
curl_close($curl);

$data = json_decode($result, true, JSON_THROW_ON_ERROR); // parse json string to array

print_r($data);
