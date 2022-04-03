<?php

namespace App\Routes;

use CoffeeCode\Router\Router;

use function App\Config\session;

class Routing
{
  public $router;

  public function __construct()
  {
    $this->router = new Router(URL);
    $this->router->namespace('App\Controllers');

    //web
    $this->router->get('/', 'Main:index');

    //erros
    $this->router->get('/error', 'Main:error');

    //migrations
    $this->router->get('/migration', 'Migration:create');

    $this->router->dispatch();

    //rota para erros, urls não existenste
    if ($this->router->error()) {
      $this->router->redirect('/error');
    }
  }

  /** auth routes */
  public function auth($controller)
  {
    if (isset($_SESSION['user'])) {
      return $controller;
    } else {
      return 'Main:index';
    }
  }
}
