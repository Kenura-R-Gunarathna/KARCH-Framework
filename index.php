<?php

use App\ErrorHandling;

try {

    //set error handler
    register_shutdown_function(function () {
        ErrorHandling::customError();
    });

    ob_start();
    include_once(__DIR__ . '/vendor/autoload.php');
} catch (\Throwable $th) {

    if (ob_get_contents()) ob_end_clean();
    ErrorHandling::_500($th);
}

ErrorHandling::check_404();
