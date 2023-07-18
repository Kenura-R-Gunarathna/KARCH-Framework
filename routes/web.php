<?php

use App\Route;
use App\Controllers\FirstController;

Route::get('/', FirstController::class, 'index');

Route::get('/docs', FirstController::class, 'docs');
