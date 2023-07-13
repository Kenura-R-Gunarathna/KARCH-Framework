<?php

// Start loading data from server

$httpHost = $_SERVER['HTTP_HOST'];

$requestMethod = $_SERVER['REQUEST_METHOD'];

$requestURI = $_SERVER['REQUEST_URI'];

if (isset($_SERVER['PATH_INFO'])) {
    $pathInfo = $_SERVER['PATH_INFO'];
} else {
    $pathInfo = '/';
}

$serverName = $_SERVER['SERVER_NAME'];

// End loading data from server

$URLs = [];
