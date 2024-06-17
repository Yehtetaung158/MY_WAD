<?php

print_r($_POST);

$conn=mysqli_connect("localhost","Yehtetaung",12345678,"wad_shop");
if(!$conn){
    die(mysqli_connect_errno());
}
$id=$_POST["id"];
$name=$_POST["name"];
$price=$_POST["price"];
$stock=$_POST["stock"];
$sql="UPDATE `products` SET name='$name',price=$price,stock=$stock WHERE id=$id";
print_r($sql);

$query=mysqli_query($conn,$sql);
if($query){
    header("Location:./index.php");
}