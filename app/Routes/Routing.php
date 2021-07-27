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
    $this->router->get('/', 'MainController:home');

    //erros
    $this->router->get('/error', 'MainController:error');

    //migrations
    $this->router->get('/migration', 'MigrationController:create');

    //create controller
    $this->router->get('/controller', 'MainController:controller');
    $this->router->post('/controller/create', 'CreateController:create');

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
      return 'WebController:home';
    }
  }
}
