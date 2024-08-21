<?php

require_once "./functions.php";
require_once "./routes/web.php";

$path = $_SERVER['PATH_INFO'] ?? "/";

// if($path === '/'){
//     require_once "./views/home.php";
// }else if($path === "/about-us"){
//     require_once "./views/about.php";
// }else if($path === "/services"){
//     require_once "./views/services.php";
// }else {
//     require_once "./views/not-found.php";
// }

// views($routes[$path] ?? "not-found");

echo "<pre>";

$current = $routes[$path] ?? false;

if($current){

    $arr = explode("@", $current);
    
    $controllerfile = $arr[0];
    $controllerFunction = $arr[1];
    
    require_once "./controller/" . $controllerfile . ".php";
    
    call_user_func($controllerFunction);
}else{
    views("not-found");
};