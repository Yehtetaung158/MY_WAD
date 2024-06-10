<?php

header("Content-Type:application/json");

if($_SERVER['REQUEST_METHOD'] != "GET"){
    $message=json_encode(["message" => "GET method only"]);
}

$productFolder="products";
$products=array_filter(scandir($productFolder),fn ($el)=> $el != "." && $el != "..");

$results=[];
foreach ($products as $pd){
    $content=file_get_contents($productFolder."/". $pd);
    $obj=json_decode($content);
    array_push($results,$obj);
}

echo json_encode($results);