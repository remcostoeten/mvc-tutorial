<?php

$url = $_SERVER['REQUEST_URI'];

echo $url;

require 'controllers/' . $url . '.php';
$controller = new Index();