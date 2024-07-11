<?php

require_once "./db_connection.php";

print_r($_POST);
$id=$_POST['id'];
$nation=$_POST["nation"];
$nation_code=$_POST["nation_code"];

$sql="UPDATE nationlity SET `nation`='$nation',`nation_code`='$nation_code' WHERE nationlity_id=$id";

$query=mysqli_query($conn,$sql);

if($query){
    header("Location:./nationlity.php");
}