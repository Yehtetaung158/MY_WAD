<?php

echo "<pre>";
$conn=mysqli_connect("localhost","Yehtetaung",12345678,"wad_shop");

if(!$conn){
    die(mysqli_connect_errno());
}

$id=$_GET["row_id"];


$sql= "DELETE FROM `products` WHERE id=$id";

$quer= mysqli_query($conn,$sql);

if($sql){
    header("Location: ./index.php");
}