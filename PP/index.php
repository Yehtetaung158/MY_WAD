<?php 

echo("I am indexs");
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

$routes=[
    "/"=>"./views/home.php",
    "/about-us"=>"./views/about.php",
    "/services"=>"./views/services.php",
];

require_once $routes[$path] ?? "./views/not-found.php";