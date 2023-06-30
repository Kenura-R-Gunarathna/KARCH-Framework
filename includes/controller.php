<?php

namespace App;

use App\DataHandling;
use PDO;
use App\DB;

class Controller
{
    public static function index()
    {
        view('index.php');
    }
    public static function docs(DataHandling $data = null)
    {
        if (isset($data->get->page)) {
            view('docs.php');
        } else {
            view('docs.php');
        }
    }
}
