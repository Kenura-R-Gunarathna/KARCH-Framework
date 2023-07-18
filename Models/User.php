<?php

namespace App\Models;

use App\DB;

class User extends DB
{
    public string $table_name = "users";

    public function __construct()
    {
        $this->table($this->table_name);
    }
}
