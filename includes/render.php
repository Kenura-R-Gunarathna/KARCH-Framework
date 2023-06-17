<?php

function view($location, $error = ['code' => '', 'message' => ''])
{
    $views = "/../views/";
    $error = (object) $error;
    $view_missing_error = $error->code . ' : ' . $error->message . ",\n\n View file for error is missing.";

    try {
        @require_once __DIR__ . $views . $location;
    } catch (\Throwable $th) {
        if (empty($error)) {
            return print("View file not found");
        } else {
            return print($view_missing_error);
        }
    }
}

function redirect($url)
{
    try {
        header("Location: $url");
        exit();
    } catch (\Throwable $th) {
        return print("View file not found");
    }
}
