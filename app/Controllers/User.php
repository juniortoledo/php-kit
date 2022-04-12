<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\UserModel;

class User extends Controller
{
  private $userModel;

  public function __construct()
  {
    $this->userModel = new UserModel();
  }

  /**
   * authenticate the user
   */
  public function login($data)
  {
    // conver json in array
    $data = self::response($data);
    $user = $this->userModel->loginUser($data);

    // insert data
    if ($user) {
      // success get data
      self::send(array(
        'msg' => 'Success login.'
      ), 200);
    } else {
      // error
      self::send(array(
        'msg' => 'Email or password incorret.'
      ), 200);
    }
  }

  /**
   * get a user
   */
  public function get($data)
  {
    $user = $this->userModel->getUser($data);
    // get data
    if ($user) {
      // success get data
      self::send($user, 200);
    } else {
      // error
      self::send(array(
        'msg' => 'Error searching user.'
      ), 200);
    }
  }

  /**
   * get all users
   */
  public function getALL()
  {
    $users = $this->userModel->getAllUsers();

    // get data
    if ($users) {
      // success get data
      self::send($users, 200);
    } else {
      // error
      self::send(array(
        'msg' => 'Error searching users.'
      ), 200);
    }
  }

  /**
   * add a new user
   */
  public function add($data)
  {
    // conver json in array
    $data = self::response($data);

    // insert data
    if ($this->userModel->addUser($data)) {
      // success insert data
      self::send(array(
        'msg' => 'Success created user.'
      ), 201);
    } else {
      // error
      self::send(array(
        'msg' => 'Error create the user.'
      ), 200);
    }
  }

  /**
   * update a user
   */
  public function update($data)
  {
    // conver json in array
    $data = self::response($data);

    // update data
    if ($this->userModel->updateUser($data)) {
      // success update data
      self::send(array(
        'msg' => 'Success updated user.'
      ), 201);
    } else {
      // error
      self::send(array(
        'msg' => 'Update error the user.'
      ), 200);
    }
  }

  /**
   * delete a user
   */
  public function delete($data)
  {
    // conver json in array
    $data = self::response($data);

    // delete data
    if ($this->userModel->deleteUser($data)) {
      // success delete data
      self::send(array(
        'msg' => 'Succes deleted user.'
      ), 201);
    } else {
      // error
      self::send(array(
        'msg' => 'Update error the user.'
      ), 200);
    }
  }
}
