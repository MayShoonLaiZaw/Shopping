<?php
spl_autoload_register(function($classes){
    $paths = [
        "init/classes/$classes",
        "init/abstract/$classes",
        "init/interface/$classes"
    ];
    foreach($paths as $value) {
        if(file_exists($value)) {
            return require_once $value;
        }
    }
})
?>