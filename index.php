<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

use App\Routes\Routing;

require __DIR__ . "/vendor/autoload.php";

use App\Routes;

$router = new Routing();
