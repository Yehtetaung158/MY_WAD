<?php

print_r($_GET);

$fileName=$_GET["file_name"];
$content=file_get_contents("products/".$fileName);
$obj=json_decode($content);
print_r($obj);