<?php
spl_autoload_register(function($class) {
    // Para evitar erros
    if(file_exists($class.'.php')) {
        require $class.'.php';
    }
});
