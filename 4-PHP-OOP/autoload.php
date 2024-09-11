<?php

function autoLoader($class)
{
    $path = __DIR__ . '/classes/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require $path;
    }
}

spl_autoload_register('autoLoader');
