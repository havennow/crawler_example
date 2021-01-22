<?php

declare(strict_types=1);

include_once __DIR__ . '/functions.php';

use Goutte\Client;

$client = new Client();
$url = 'https://google.com';

$crawler = $client->request('GET', $url);

$link = $crawler->getUri();

echo "link : $link \n\n";
echo "------------------ \n\n";
dd($crawler);

