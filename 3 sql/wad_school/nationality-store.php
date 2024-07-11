<?php

require_once "./db_connection.php";

print_r($_POST);

$nation=$_POST['nation'];
$nation_code=$_POST['nation_code'];


$sql="INSERT INTO `nationlity`( `nation`, `nation_code`) VALUES ('$nation','$nation_code')";

$query=mysqli_query($conn,$sql);

if ($query) {
    header("Location:nationlity.php");
}