<?php
session_start();
spl_autoload_register(function($classes) {
    $path = [
        "init/classes/$classes",
    ];
    foreach($path as $value) {
        if(file_exists($value)) {
            require_once $value;
        }
    }
})
?>