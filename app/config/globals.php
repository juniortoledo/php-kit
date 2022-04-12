<?php

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

if (getenv('WEB') === 'PROD') {

  define('URL', getenv('URL_PROD')); // glocal url
  define('ASSETS', URL . 'assets/');
  define('JS', URL . 'assets/js/');
  define('CSS', URL . 'assets/css/');
  define('IMAGES', URL . 'assets/images/');

  // connections
  define('CONN', [
    'driver' => getenv('DB_DRIVER_PROD'),
    'port' => getenv('DB_PORT_PROD'),
    'host' => getenv('DB_HOST_PROD'),
    'username' => getenv('DB_USER_PROD'),
    'password' => getenv('DB_PASSWD_PROD'),
    'dbname' => getenv('DB_DBNAME_PROD')
  ]);

} elseif (getenv('WEB') === 'DEV') {

  define('URL', getenv('URL_DEV')); // glocal url
  define('ASSETS', URL . 'assets/');
  define('JS', URL . 'assets/js/');
  define('CSS', URL . 'assets/css/');
  define('IMAGES', URL . 'assets/images/');

  // connections
  define('CONN', [
    'driver' => getenv('DB_DRIVER_DEV'),
    'port' => getenv('DB_PORT_DEV'),
    'host' => getenv('DB_HOST_DEV'),
    'username' => getenv('DB_USER_DEV'),
    'password' => getenv('DB_PASSWD_DEV'),
    'dbname' => getenv('DB_DBNAME_DEV')
  ]);
}
