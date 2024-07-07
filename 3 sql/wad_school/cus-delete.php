<?php 

echo "<pre>";
require_once "./db_connection.php";


$id=$_GET['row_id'];

$sql="DELETE FROM `customer_datas` WHERE id=$id";

$query=mysqli_query($conn,$sql);
if($query){
    header("Location:./customer-data.php");
}