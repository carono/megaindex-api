<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';

$client = new \carono\megaindex\Client();
$client->login = 'megaindex-api-test@megaindex.ru';
$client->password = '123456';

$response = $client->scan_yandex_suggest('плитка');

print_r($response);