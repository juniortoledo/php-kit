<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
date_default_timezone_set('America/Sao_Paulo');

use App\Routes\Routing;

require __DIR__ . "/vendor/autoload.php";

$router = new Routing();
