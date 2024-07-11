<?php


require_once "./db_connection.php";

$id = $_GET["row_id"];

// sql

$sql = "DELETE FROM gender WHERE id = $id ";


// query

$query = mysqli_query($conn, $sql);


if ($query) {
    header("Location:gender.php");
}
