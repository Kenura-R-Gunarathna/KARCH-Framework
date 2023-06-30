<?php

namespace App;

class ErrorHandling
{

    public static string $view_404 = '/errors/404.html';

    public static string $message_404 = "Page not found";

    public static string $view_405 = '/errors/405.html';

    public static string $message_405 = "Method not allowd";

    public static string $view_500 = '/errors/500.html';

    public static string $message_500 = "Internal server error";

    public static function _404($message = null)
    {
        if ($message != null) {
            self::error_output(404, $message, self::$view_404);
        } else {
            self::error_output(404, self::$message_404, self::$view_404);
        }

        exit();
    }
    public static function _405($message = null)
    {
        if ($message != null) {
            self::error_output(405, $message, self::$view_405);
        } else {
            self::error_output(405, self::$message_405, self::$view_405);
        }

        exit();
    }
    public static function _500($message = null)
    {
        if ($message != null) {
            self::error_output(500, $message, self::$view_500);
        } else {
            self::error_output(500, self::$message_500, self::$view_500);
        }

        exit();
    }

    public static function  check_404()
    {
        global $pathInfo, $URLs;

        # 404 page error
        if (!array_key_exists($pathInfo, $URLs)) {
            return ErrorHandling::_404();
        }
    }

    public static function check_405(string $requestMethod, string $methodAllowd)
    {
        // Check for POST, GET method errors

        if ($requestMethod != $methodAllowd) {
            return ErrorHandling::_405();
        }
    }

    protected static function error_output(int $code, string $message, string $view)
    {
        try {
            return view($view, [], ['code' => $code, 'message' => $message]);
        } catch (\Throwable $th) {
            return print($message);
        }
    }
}
