<?php

namespace App;

use App\DataHandling;
use PDO;
use App\DB;
use App\ErrorHandling;

class Controller
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

                case 'views-redirects-assets':
                    $page = 'views-redirects-assets';
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
