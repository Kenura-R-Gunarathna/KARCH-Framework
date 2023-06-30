<?php

namespace App;

use App\ErrorHandling;

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

class Route
{
    public static function get(string $uri, $callback, $classMethod = null)
    {
        return self::response($uri, 'GET', $callback, $classMethod);
    }

    public static function post(string $uri, $callback, $classMethod = null)
    {
        return self::response($uri, 'POST', $callback, $classMethod);
    }

    public static function response($uri, $methodAllowd, $callback, $classMethod)
    {
        global $pathInfo, $URLs, $requestMethod;

        $URLs[$uri] = $callback;

        if (($uri == $pathInfo) || ('/' . $uri == $pathInfo)) {

            ErrorHandling::check_405($requestMethod, $methodAllowd);

            try {
                # For inline functions
                return call_user_func($callback);
            } catch (\Throwable $th) {

                # For classes
                return $callback::$classMethod();
            }
        }
    }
}

require_once __DIR__ . "/../routes/web.php";
