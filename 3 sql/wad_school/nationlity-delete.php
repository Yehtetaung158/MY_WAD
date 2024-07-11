<?php 

echo "<pre>";
require_once "./db_connection.php";


$id=$_GET['row_id'];

// die($id);

$sql="DELETE FROM `nationlity` WHERE nationlity_id=$id";
 

$query=mysqli_query($conn,$sql);
if($query){
    header("Location:./nationlity.php");
}