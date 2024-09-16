<?php

function views(string $file, array $data = null): bool
{
    if (!is_null($data)) {
        extract($data);
    }
    require_once __DIR__ . "/views/" . $file . ".php";
    return true;
};

function conrtoller(string $current): bool
{
    $arr = explode("@", $current);
    $controllerfile = $arr[0];
    $controllerFunction = $arr[1];
    require_once __DIR__ . "/controller/" . $controllerfile . ".php";
    call_user_func($controllerFunction);
    return true;
}
function routing($routes): void
{
    $path = $_SERVER['PATH_INFO'] ?? "/";
    // echo "<pre>";
    $current = $routes[$path] ?? false;
    if ($current) {
        conrtoller($current);
    } else {
        views("not-found");
    };
}

function asset(string $filePath): string
{
    $fullUrl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . "/" . ltrim($filePath, "/");

    return $fullUrl;
}

function url(string $filePath, array $data = null): string
{
    $fullUrl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . "/" . ltrim($filePath, "/") . (
        is_null($data) ? "" : "?" . http_build_query($data));

    return $fullUrl;
}

function template(string $name): void
{
    require_once __DIR__ . "/views/templates/" . $name . ".php";
}

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    die();
}

//db fun;
function connect(): object
{
    global $configs;
    return mysqli_connect($configs["db_host"], $configs["db_user"], $configs["db_password"], $configs["db_name"]);
}

function runQuery(string $sql): mixed
{
    $conn = connect();
    $query = mysqli_query($conn, $sql);
    return $query;
}

function first(string $sql): mixed
{
    $query = runQuery($sql);
    $row = mysqli_fetch_assoc($query);
    return $row;
}

function get(string $sql): mixed
{
    $query = runQuery($sql);
    $rows = [];
    while (
        $row = mysqli_fetch_assoc($query)
    ) {
        $rows[] = $row;
    }
    return $rows;
}

function redirect(string $url): void
{
    header("Location:$url");
}
