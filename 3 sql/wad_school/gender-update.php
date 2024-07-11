<?php

require_once "./db_connection.php";



// print_r($_POST);
$id = $_POST["row_id"];
$type = $_POST["type"];


$sql = "UPDATE gender SET type='$type' WHERE id=$id";

// echo $sql;

$query = mysqli_query($conn, $sql);

if ($query) {
    header("Location:gender.php");
}
