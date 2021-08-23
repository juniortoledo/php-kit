<?php

namespace App\Controllers;

class UploadController
{
  /**
   * $files recebe um array
   * $name recebe o novo nome do arquivo
   */
  public function file($data)
  {
    $extensao = strtolower(substr($data['name'], -5)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo

    move_uploaded_file($data['tmp_name'], $diretorio . $novo_nome); //efetua o upload

    return $novo_nome;
  }

  public function delete($name) {
    unlink('upload'.'/'.$name);
  }
}
