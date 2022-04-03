<?php

namespace App\Core;

class Api
{
  /**
   * recive json
   */
  public function get($data)
  {
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    return $data;
  }

  /**
   * send json
   */
  public function send($array, $httpCode)
  {
    http_response_code($httpCode);

    json_encode($array);
  }
}
