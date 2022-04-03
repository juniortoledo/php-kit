<?php

namespace App\Core;

use League\Plates\Engine;

class View
{
  public function __construct()
  {
    $this->view = new Engine(__DIR__ . '/../views');
  }
}
