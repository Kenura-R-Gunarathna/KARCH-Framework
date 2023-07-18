<?php

namespace App\Controllers;

use PDO;
use App\DB;
use App\Controller;
use App\DataHandling;
use App\ErrorHandling;

class FirstController extends Controller
{
    public static function index()
    {
        $data = new DataHandling;

        view('index.php');
    }
}
