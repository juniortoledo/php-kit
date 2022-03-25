<?php

namespace App\Controllers;

use App\Utils\View;

class MainController extends View
{
  /** view home */
  public function home()
  {
    echo $this->view->render('web/home');
  }

  /** view error */
  public function error()
  {
    echo $this->view->render('web/error');
  }
}
    
