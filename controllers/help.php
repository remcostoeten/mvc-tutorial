<?php

class help {
    function __construct() {
        echo 'We are in help<br>';
    }

    public function other($arg = false) {
        echo 'We are inside other<br>';
        echo 'Optional: ' . $arg;
    }
}
