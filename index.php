<?php


use App\ErrorHandling;

// Set the custom error handler
register_shutdown_function(function () {
    ErrorHandling::customError();
});

// Hide default php errors
ini_set('display_errors', 0);

require_once(__DIR__ . '/src/site_data.php');
include_once(__DIR__ . '/vendor/autoload.php');

ob_start();

require_once(__DIR__ . '/src/render.php');
require_once(__DIR__ . "/Routes/web.php");

ErrorHandling::check_404();
