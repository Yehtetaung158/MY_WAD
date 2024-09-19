<?php

require_once __DIR__."/vendor/autoload.php";

use Symfony\Component\Dotenv\Dotenv;


$dotEnv = new Dotenv();

$dotEnv->load(__DIR__ . "/.env");