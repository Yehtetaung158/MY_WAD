<?php
require_once "./db_connection.php";


$id = $_POST["id"];
$Name = $_POST["Name"];
$Gender = $_POST["Gender"];
$Birthday = $_POST["Birthday"];
$Phone = $_POST["Phone"];

$sql="UPDATE customer_datas SET Name='$Name',Gender='$Gender',Birthday='$Birthday',Phone='$Phone' WHERE id=$id";

$query = mysqli_query($conn, $sql);

if($query){
    header("Location:./customer-data.php");
}