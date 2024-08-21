<?php

function views(string $file): bool
{
    require_once "./views/" . $file . ".php";
    return true;
};

function conrtoller(string $current): bool
{
    $arr = explode("@", $current);
    $controllerfile = $arr[0];
    $controllerFunction = $arr[1];
    require_once "./controller/" . $controllerfile . ".php";
    call_user_func($controllerFunction);
    return true;
}

function routing($routes): void
{
    $path = $_SERVER['PATH_INFO'] ?? "/";
    echo "<pre>";
    $current = $routes[$path] ?? false;
    if ($current) {
        conrtoller($current);
    } else {
        views("not-found");
    };
}
