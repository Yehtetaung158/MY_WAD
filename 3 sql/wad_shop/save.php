<?php

echo "<pre>";

// print_r($_POST);

$con= mysqli_connect("localhost","Yehtetaung",12345678);

var_dump($con);

// if(!$con){
//     echo mysqli_connect_errno();
// }

$name=$_POST["name"];
$price=$_POST["price"];
$stock=$_POST["stock"];

$sql="INSERT INTO Products () VALUE ('$name',
$price,$stock)";

echo $sql;