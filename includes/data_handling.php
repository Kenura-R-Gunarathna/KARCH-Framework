<?php

namespace App;

use Dotenv\Dotenv;

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

        // Looing for .env at the root directory
        $env = parse_ini_file('.env');
        $this->env = (object) $env;
    }
}
