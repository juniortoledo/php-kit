<?php

namespace App\Controllers;

use CoffeeCode\Uploader\Image;

class UploadController
{
  /**
   * $files recebe um array
   * $name recebe o novo nome do arquivo
   */
  public function file($files, $name)
  {
    $image = new Image("uploads", "images", false);
    if ($_FILES) $upload = $image->upload($_FILES['image'], $name);
  }

  /**
   * gera um nome aleatório
   */
  public function name()
  {
    $bytes = random_bytes(10);
    return bin2hex($bytes);
  }
}
