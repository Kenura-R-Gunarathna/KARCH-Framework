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
    public static function docs()
    {

        $data = new DataHandling;

        if (isset($data->get->page)) {

            $page = null;

            switch ($data->get->page) {

                case 'introduction':
                    $page = 'introduction';
                    break;

                case 'installation':
                    $page = 'installation';
                    break;

                case 'routes':
                    $page = 'routes';
                    break;

                case 'controllers':
                    $page = 'controllers';
                    break;

                case 'special-functions':
                    $page = 'special-functions';
                    break;

                case 'requests':
                    $page = 'requests';
                    break;

                case 'database-queries':
                    $page = 'database-queries';
                    break;

                case 'migrations':
                    $page = 'migrations';
                    break;

                case 'error-handling':
                    $page = 'error-handling';
                    break;

                default:
                    return ErrorHandling::_404();
                    break;
            }

            return view('docs.php', ['page' => $page]);
        } else {
            view('docs.php', ['page' => 'introduction']);
        }
    }
}
