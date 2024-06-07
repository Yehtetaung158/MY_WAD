<?php

echo "<pre>";


$saveFolder = "photo";

if (!is_dir($saveFolder)) {
    mkdir($saveFolder, 0777);
}

$saveFileName = $saveFolder."/".$_FILES["upload"]["name"];

if (move_uploaded_file($_FILES["upload"]["tmp_name"], $saveFileName)) {
    header("Location:gallery.php");
    // print_r($saveFileName);
}
