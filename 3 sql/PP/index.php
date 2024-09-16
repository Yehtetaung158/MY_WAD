<?php
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/routes/web.php";

routing($routes);

// $path = $_SERVER['PATH_INFO'] ?? "/";

// echo "<pre>";

// $current = $routes[$path] ?? false;

// if ($current) {

//     $arr = explode("@", $current);

//     $controllerfile = $arr[0];
//     $controllerFunction = $arr[1];

//     require_once "./controller/" . $controllerfile . ".php";

//     call_user_func($controllerFunction);
// } else {
//     views("not-found");
// };
