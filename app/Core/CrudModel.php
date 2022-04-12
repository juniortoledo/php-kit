<?php

namespace App\Core;

use App\Core\Model;

class CrudModel extends Model
{
  /** 
   * update data
   */
  public function update($array, $table, $id)
  {
    $res = $this->db()
      ->update($table)
      ->where('id')->is($id)
      ->set($array);

    return $res;
  }

  /** 
   * insert data
   */
  public function insert($array, $table)
  {
    $res = $this->db()
      ->insert($array)
      ->into($table);

    return $res;
  }

  /** 
   * get data
   */
  public function get($table, $column, $value)
  {
    $res = $this->db()
      ->from($table)
      ->where($column)->is($value)
      ->select()
      ->all();

    return $res;
  }

  /** 
   * get all datas
   */
  public function getAll($table)
  {
    $res = $this->db()
      ->from($table)
      ->select()
      ->all();

    return $res;
  }

  /** 
   * delete data
   */
  public function delete($table, $id)
  {
    $res = $this->db()
      ->from($table)
      ->where('id')->is($id)
      ->delete();

    return $res;
  }
}
