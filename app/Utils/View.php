<?php

namespace App\Utils;

use App\Models\CrudModel;
use League\Plates\Engine;

class View
{
  public $view;
  private $crud;

  public function __construct()
  {
    $this->view = new Engine(__DIR__ . '/../views');
    $this->crud = new CrudModel();

    if (isset($_SESSION['user'])) {
      foreach ($this->crud->read('users', 'id', $_SESSION['id']) as $item) {
        $this->view->addData([
          'urlName' => str_replace('route=/', '', $_SERVER['QUERY_STRING']),
          'avatar' =>  $item->cover
        ]);
      }
    }
  }
}
