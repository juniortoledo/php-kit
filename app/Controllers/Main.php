<?php

namespace App\Controllers;

use App\Core\Controller;

class Main extends Controller
{
  /**
   * view index
   */
  public function index()
  {
    // render view
    self::render('index');
  }

  /**
   * view error
   */
  public function error()
  {
    // render error
    self::render('error');
  }
}
