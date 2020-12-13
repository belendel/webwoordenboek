<?php

use Symfony\Component\HttpClient\HttpClient;

require __DIR__.'/vendor/autoload.php';

$client = HttpClient::createForBaseUri('https://webwoordenboek.nl');
dump($client->request('GET', '/zoeken/autocomplete', [
	'query' => [
		'q' => $argv[1],
	],
])->toArray());
