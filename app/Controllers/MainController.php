<?php

namespace App\Controllers;

use App\Utils\View;
use App\Models\CrudModel;
use App\Controllers\UploadController;

class MainController extends View
{
  private $crud;
  public function __construct()
  {
    $this->crud = new CrudModel();
    parent::__construct();
  }

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

   /** view controller */
   public function controller()
   {
     echo $this->view->render('web/controller');
   }

}
    