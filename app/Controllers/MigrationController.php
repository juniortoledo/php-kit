<?php

namespace App\Controllers;

use App\Database\Conn;
use Opis\Database\Schema\CreateTable;

ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

class MigrationController extends Conn
{
  /**
   * metodo que invoca os métodos de criação de tabelas
   */
  public function create()
  {

  }

  /**
   * verifica se a table já existe
   */
  public function table($name)
  {
    $res = $this->db()
      ->schema()
      ->hasTable($name);

    return $res;
  }
}
