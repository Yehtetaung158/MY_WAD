<?php

header("Content-Type:application/json");

if($_SERVER['REQUEST_METHOD'] != "GET"){
    $message=json_encode(["message" => "GET method only"]);
}

$photos= array_filter(scandir("photos"),fn ($el)=> $el !="." && $el != "..");

echo json_encode(array_values($photos));