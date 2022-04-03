<?php

namespace App\Core;

use App\Core\Conn;
use Opis\Database\Schema\CreateTable;

class Migration extends Conn
{
  public function execute()
  {
    // check if table exists
    if (!$this->db()->schema()->hasTable('users')) {
      $this->db()->schema()->create('users', function (CreateTable $table) {
        $table->integer('id')->primary()->autoincrement();
        $table->text('name')->notNull();
        $table->text('email')->notNull();
        $table->text('passwd')->notNull();
        $table->text('created_at');
      });
    }

    //msg
    echo 'migrations completed';
  }
}
