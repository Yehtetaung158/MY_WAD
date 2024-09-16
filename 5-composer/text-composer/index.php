<?php

require_once "./vendor/autoload.php";

use GuzzleHttp\Client;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;


// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('path/to/your.log', Level::Warning));

// add records to the log
$log->warning('Ye Htet Aung');
$log->error('San Kyi tat');

$client = new Client();

$res = $client->request("GET", "https://fakestoreapi.com/products/1");

// $data = $res->getBody();

echo $res->getBody();
