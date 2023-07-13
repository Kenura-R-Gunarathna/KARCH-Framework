<?php

namespace App;

use App\ErrorHandling;

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
