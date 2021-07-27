<?php

namespace App\Controllers;

use App\Utils\View;

ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

class CreateController extends View
{
  /** create new controller */
  public function create($data)
  {
    $name = $data['name'];

    $code = "<?php

namespace App\Controllers;

use App\Utils\View;
use App\Models\CrudModel;

class $name extends View
{
  private \$crud;
  public function __construct()
  {
    \$this->crud = new CrudModel();
    parent::__construct();
  }

  /** view home */
  public function home()
  {
    echo \$this->view->render('path/home');
  }

  /**
   * gravar informações no banco
   */
  public function addData(\$data)
  {
    \$res = \$this->crud->add(\$data, 'Nome_da_tabela');

    if(\$res) header('location:'.URL.'Extenção_da_URL');
  }

  /**
   * editar informações no banco
   */
  public function editData(\$data)
  {
    \$res = \$this->crud->update(\$data, 'Nome_da_tabela', 'id_da_coluna');

    if(\$res) header('location:'.URL.'Extenção_da_URL');
  }

  /**
   * ler informações no banco
   */
  public function readData(\$data)
  {
    \$res = \$this->crud->read('Nome_da_tabela', 'Nome_da_coluna', 'id_da_coluna');

    return \$res;
  }

  /**
   * deletar informações no banco
   */
  public function delData(\$data)
  {
    \$res = \$this->crud->delete('Nome_da_tabela', 'id_da_coluna');

    if(\$res) header('location:'.URL.'Extenção_da_URL');
  }
}
    ";

    $createFile = fopen(__DIR__.'/'.$name.'.php', 'w');
    fwrite($createFile, $code);
    fclose($createFile);

    header('location:'.URL.'controller?success');
  }
}
