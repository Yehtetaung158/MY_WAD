<?php

echo "<pre>";

// print_r($_POST);

$con= mysqli_connect("localhost","Yehtetaung",12345678,"wad_shop");

// var_dump($con);

if(!$con){
    die(mysqli_connect_errno());
}

$name=$_POST["name"];
$price=$_POST["price"];
$stock=$_POST["stock"];

$sql="INSERT INTO Products (name,price,stock) VALUE ('$name',
$price,$stock)";

$query=mysqli_query($con,$sql);

var_dump($query);
if($query){
    header("Location: ./index.php");
}