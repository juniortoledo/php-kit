<?php

namespace App\Controllers;

use App\Core\Migration;
use App\Core\View;

class Main extends View
{
  /**
   * view index
   */
  public function index()
  {
    echo $this->view->render('main/index');
  }

  /**
   * migration
   */
  public function migration()
  {
    $migration = new Migration();
    $migration->execute();
  }

  /** 
   * view error
   */
  public function error()
  {
    echo $this->view->render('main/error');
  }
}
