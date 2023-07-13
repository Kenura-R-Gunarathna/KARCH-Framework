<?php

namespace App;

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

class DataHandling
{
    public $get;
    public $post;
    public $cookie;
    public $request;
    public $files;
    public $server;
    public $session;
    public $env;

    public function __construct()
    {
        $this->get = (object) $_GET;
        $this->post = (object) $_POST;
        $this->cookie = (object) $_COOKIE;
        $this->request = (object) $_REQUEST;
        $this->files = (object) $_FILES;

        if (isset($_SESSION)) {
            $this->session = (object) $_SESSION;
        } else {
            $this->session = null;
        }

        // Looing for .env at the root directory
        $env = parse_ini_file('.env');
        $this->env = (object) $env;
    }
}
