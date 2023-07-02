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
        if (isset($variables)) {
            extract($variables);
        }
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

function route($route)
{
    global $httpHost;

    $protocol = isset($_SERVER['HTTPS']) ? 'https' : 'http';

    if (substr($route, 0, 1) != '/') {
        $route = '/' . $route;
    }

    return print($protocol . '://' . $httpHost . $route);
}

function asset($path)
{
    if (substr($path, 0, 1) != '/') {
        $path = '/' . $path;
    }

    route($path . '/public' . $path);
}

function request($parameter)
{

    $data = new App\DataHandling;

    return print($data->request->$parameter);
}

function config($envName)
{
    $data = new App\DataHandling;

    return print($data->env->$envName);
}

function get($parameter)
{
    $data = new App\DataHandling;

    return print($data->get->$parameter);
}

function post($parameter)
{
    $data = new App\DataHandling;

    return print($data->env->$parameter);
}

function cookie($parameter)
{
    $data = new App\DataHandling;

    return print($data->cookie->$parameter);
}

function files($parameter)
{
    $data = new App\DataHandling;

    return print($data->files->$parameter);
}

function session($parameter)
{
    $data = new App\DataHandling;

    if (isset($_SESSION)) {
        $data->session = (object) $_SESSION;
    } else {
        $data->session = null;
    }
    return print($data->session->$parameter);
}
