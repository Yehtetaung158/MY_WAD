<?php 

$folderName="photo";
$file=$_GET["file_name"];

echo $file;
if(unlink($folderName."/".$file)){
    header("Location:gallery.php");
}