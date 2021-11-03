<?php

class Bootstrap {
    function __construct() {
        $url = explode('/', ltrim($_SERVER['REQUEST_URI'], '/'));

        if($url[0] === "") {
            $url[0] = "Index";
        }

        //print_r($url);

        $file = 'controllers/' . $url[0] . '.php';
        if (file_exists($file) && !isset($url[3])) {
            require $file;
        } else {
            require 'controllers/errormsg.php';
            $controller = new errormsg();
            return false;
        }

        $controller = new $url[0];

        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);
        } else {
            if (isset($url[1])) {
                $controller->{$url[1]}();
            }
        }
    }
}
