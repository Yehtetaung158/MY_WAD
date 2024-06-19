<?php 

echo "<pre>";
$conn = mysqli_connect("localhost", "Yehtetaung", 12345678, "wad_shop");

if (!$conn) {
    die(mysqli_connect_errno());
}

$id=$_GET['row_id'];

$sql="DELETE FROM `customer_datas` WHERE id=$id";

$query=mysqli_query($conn,$sql);
if($query){
    header("Location:./customer-data.php");
}