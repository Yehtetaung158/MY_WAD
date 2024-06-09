<?php

echo"<pre>";
print_r($_POST);
print_r($_FILES);


$saveFolder="product-photo";
$productFolder="products";

if(!is_dir($saveFolder)){
    mkdir($saveFolder,0777);
};
if(!is_dir($productFolder)){
    mkdir($productFolder,0777);
};

$ext=pathinfo($_FILES['product_image']['name']);
$saveFileName=$saveFolder."/". uniqid().".".$ext;

if(move_uploaded_file($_FILES['product_image']['tmp_name'],$saveFileName)){
    $_POST['product_photo']=$saveFileName;
}

print_r($_POST);
$jaon=json_encode($_POST);

$productFileName=$productFolder."/". uniqid(). "_" .$_POST ["product_name"] . ".json";

touch($productFileName);

$fileStream=fopen($productFileName,'w');

fwrite($fileStream,$jaon);

fclose($fileStream);

header("Location:product.php");
