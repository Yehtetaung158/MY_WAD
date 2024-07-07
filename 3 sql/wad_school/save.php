<?php

echo "<pre>";

require_once "./db_connection.php";

$title=$_POST["title"];
$short=$_POST["short"];
$fee=$_POST["fee"];


$sql="INSERT INTO courses (title,short,fee) VALUE ('$title',
'$short',$fee)";

$query=mysqli_query($conn,$sql);

var_dump($query);
if($query){
    header("Location: ./index.php");
}