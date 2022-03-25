<?php

namespace App\Utils;

use League\Plates\Engine;

class View
{
  public $view;
  private $crud;

  public function __construct()
  {
    $this->view = new Engine(__DIR__ . '/../views');
  }
}
