<?php

require_once __DIR__ . '/includes/error_handling.php';

try {
    require_once __DIR__ . '/includes/render.php';
    require_once __DIR__ . '/includes/database.php';
    require_once __DIR__ . '/includes/data_handling.php';
    require_once __DIR__ . '/includes/controller.php';
    require_once __DIR__ . '/includes/routes.php';
} catch (\Throwable $th) {

    App\ErrorHandling::_500($th);
}

App\ErrorHandling::check_404();
