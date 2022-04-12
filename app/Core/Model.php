<?php

namespace App\Core;

use Opis\Database\Database;
use Opis\Database\Connection;

class Model
{
  /**
   * database connection
   */
  public function db()
  {
    $connection = new Connection(
      CONN['driver'] . ':host=' . CONN['host'] . ';dbname=' . CONN['dbname'],
      CONN['username'],
      CONN['password']
    );

    $db = new Database($connection);

    return $db;
  }
}
