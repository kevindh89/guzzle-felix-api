<?php

declare(strict_types=1);

require 'vendor/autoload.php';

$apiKey = '';
$felixApiDomain = 'https://felix.gemeente.nl';

$client = new \GuzzleHttp\Client();
$response = $client->request(
    'get',
    sprintf('%s/api/v1/publication?query[name]=Paspoort', $felixApiDomain),
    [
        'headers' => [
            'Authorization' => sprintf('Bearer %s', $apiKey),
        ],
    ]
);

echo $response->getBody();
