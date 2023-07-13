<?php

use App\DataHandling;

function view($location, array $variables = null, array $error = null)
{
    global $requestURI; // load all the public variables

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
        return require_once __DIR__ . $views . $location;
    } catch (\Throwable $th) {
        if (!$error) {
            return "View file not found";
        } else {
            return $view_missing_error;
        }
    }
}

function redirect($url)
{
    try {
        header("Location: $url");
        exit();
    } catch (\Throwable $th) {
        return "View file not found";
    }
}

function route($route)
{
    global $httpHost;

    $protocol = isset($_SERVER['HTTPS']) ? 'https' : 'http';

    if (substr($route, 0, 1) != '/') {
        $route = '/' . $route;
    }

    return $protocol . '://' . $httpHost . $route;
}

function asset($path)
{
    if (substr($path, 0, 1) != '/') {
        $path = '/' . $path;
    }

    return route('public' . $path);
}

function request($parameter)
{

    $data = new DataHandling;

    return $data->request->$parameter;
}

function config($envName)
{
    $data = new DataHandling;

    return $data->env->$envName;
}

function get($parameter)
{
    $data = new DataHandling;

    return $data->get->$parameter;
}

function post($parameter)
{
    $data = new DataHandling;

    return $data->env->$parameter;
}

function cookie($parameter)
{
    $data = new DataHandling;

    return $data->cookie->$parameter;
}

function files($parameter)
{
    $data = new DataHandling;

    return $data->files->$parameter;
}

function session($parameter)
{
    $data = new DataHandling;

    if (isset($_SESSION)) {
        $data->session = (object) $_SESSION;
    } else {
        $data->session = null;
    }
    return $data->session->$parameter;
}
