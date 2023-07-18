<?php

namespace App;

class ErrorHandling
{

    public static string $view_404 = '/errors/404.php';

    public static string $message_404 = "Sorry, we can't find that page.";

    public static string $view_405 = '/errors/405.php';

    public static string $message_405 = "Sorry, your method is not allowed to proceed.";

    public static string $view_500 = '/errors/500.php';

    public static string $message_500 = "Internal server error";

    public static string $view_custom_error_handler = '/errors/error-handler.php';

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
        header("HTTP/1.1 404 Not Found"); //Tell the browser this is a 404 error

        if ($message != null) {
            self::error_output(405, $message, self::$view_405);
        } else {
            self::error_output(405, self::$message_405, self::$view_405);
        }

        exit();
    }
    public static function _500($message = null)
    {
        header('HTTP/1.1 500 Internal Server Error'); //Tell the browser this is a 500 error

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
            if (ob_get_contents()) ob_end_clean();
            return ErrorHandling::_404();
        }
    }

    public static function check_405(string $requestMethod, string $methodAllowd)
    {
        // Check for POST, GET method errors

        if (ob_get_contents()) ob_end_clean();

        if ($requestMethod != $methodAllowd) {
            return ErrorHandling::_405();
        }
    }

    public static function error_output(int $code, string $message, string $view)
    {
        try {
            return view($view, [], ['code' => $code, 'message' => $message]);
        } catch (\Throwable $th) {
            return print($message);
        }
    }


    // custom error handler function
    public static function customError()
    {
        $err = error_get_last();

        if (!is_null($err)) {

            if (ob_get_contents()) ob_end_clean();

            switch ($err['type']) {
                case E_ERROR:
                    $errtype = "Fatal Error";

                case E_WARNING:
                    $errtype = "Warning";
                    break;

                case E_NOTICE:
                    $errtype = "Notice";
                    break;

                default:
                    $errtype = "Unknown Error";
                    break;
            }

            if (config('APP_DEBUG')) {
                try {
                    return view('errors/error-handler.php', ['errno' => $err['type'], 'errtype' => $errtype, 'errstr' => $err['message'], 'errfile' => $err['file'], 'errline' => $err['line']]);
                } catch (\Throwable $th) {
                    self::_500();
                }
            } else {
                self::_500();
            }
        }
    }
}
