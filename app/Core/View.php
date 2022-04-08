<?php

namespace App\Core;

use League\Plates\Engine;

class View
{
  public function __construct()
  {
    $this->view = new Engine(__DIR__ . '/../views');
  }
  
   /**
   * verifica se usuário está logado
   * redireciona para a rota padrão protegendo acessos
   */
  public function isAuth()
  {
    !$_SESSION['user'] ? header('location:'. URL) : '';
  }
}
