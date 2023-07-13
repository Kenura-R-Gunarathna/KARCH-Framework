<?php

require_once(__DIR__ . '/../../src/site_data.php');
include_once(__DIR__ . '/../../vendor/autoload.php');

use App\DB;
use App\DataHandling;

$table_name = "users";

try {
    $users = DB::table($table_name)->migrate([
        "id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
        "username VARCHAR(256) NOT NULL",
        "password VARCHAR(256) NOT NULL",
    ]);

    if ($users) {
        return print("$table_name migration completed successfully!");
    }
} catch (\Throwable $th) {
    return print("migration error : " . $th->getMessage());
}
