<?php

namespace App\Database;

use Opis\Database\Database;
use Opis\Database\Connection;

class Conn
{
  public function __construct()
  {
    $this->db();
  }
  public function db()
  {
    $connection = new Connection(
      'mysql:host=' . CONN['host'] . ';dbname=' . CONN['dbname'],
      CONN['username'],
      CONN['password']
    );

    $db = new Database($connection);

    return $db;
  }
}
