<?php 

echo "<pre>";
require_once "./db_connection.php";


$id=$_GET['row_id'];

// die($id);

$sql="DELETE FROM `batches` WHERE id=$id";

$query=mysqli_query($conn,$sql);
if($query){
    header("Location:./batchList.php");
}