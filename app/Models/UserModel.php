<?php

namespace App\Models;

use App\Core\CrudModel;

class UserModel extends CrudModel
{
  /**
   * login a new user
   */
  public function loginUser($data)
  {
    $email = self::get('users', 'email', $data['email']);
    $passwd = self::get('users', 'passwd', md5($data['passwd']));

    // check if exists the user email and password
    if ($email && $passwd) {
      return $email;
    } else {
      return false;
    }
  }

  /**
   * add a new user
   */
  public function addUser($data)
  {
    $email = self::get('users', 'email', $data['email']);

    // check id existe the user email
    if ($email) {
      // not is permitted two email igual
      return false;
    } else {
      return self::insert(array(
        'name' => $data['name'],
        'email' => $data['email'],
        'passwd' => md5($data['passwd']),
        'created_at' => date('d-m-Y\TH:i:s'),
        'updated_at' => date('d-m-Y\TH:i:s')
      ), 'users');
    }
  }

  /**
   * update a user
   */
  public function updateUser($data)
  {
    return self::update(array(
      'name' => $data['name'],
      'email' => $data['email'],
      'passwd' => md5($data['passwd']),
      'updated_at' => date('d-m-Y\TH:i:s')
    ), 'users', $data['id']);
  }

  /**
   * get a user
   */
  public function getUser($data)
  {
    return self::get('users', 'id', $data['id']);
  }

  /**
   * get all users
   */
  public function getAllUsers()
  {
    return self::getAll('users');
  }

  /**
   * get all users
   */
  public function deleteUser($data)
  {
    return self::delete('users', $data['id']);
  }
}
