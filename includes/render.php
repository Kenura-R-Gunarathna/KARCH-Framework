<?php

function view($location, array $variables = null, array $error = null)
{
    if (!isset($error)) {
        $error = ['code' => 404, 'message' => 'Page not found'];
    }

    $views = "/../views/";
    $error = (object) $error;
    $view_missing_error = $error->code . ' : ' . $error->message . ",\n\n View file for error is missing.";

    try {
        extract($variables);
        @require_once __DIR__ . $views . $location;
    } catch (\Throwable $th) {
        if (!$error) {
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
