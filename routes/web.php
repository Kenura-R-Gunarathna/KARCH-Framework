<?php

use App\Route;
use App\Controller;
use App\ErrorHandling;

Route::get('/', Controller::class, 'index');

Route::get('/docs', Controller::class, 'docs');
