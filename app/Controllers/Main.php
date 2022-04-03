<?php

namespace App\Controllers;

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
   * view error
   */
  public function error()
  {
    echo $this->view->render('main/error');
  }
}
