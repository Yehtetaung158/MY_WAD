<?php
$conn = mysqli_connect("localhost", "Yehtetaung", 12345678, "wad_shop");
// var_dump($conn);

if (!$conn) {
    die(mysqli_connect_errno());
}

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