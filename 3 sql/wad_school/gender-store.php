<?php

require_once "./db_connection.php";

// print_r($_POST);

$type = $_POST["type"];


// SQL 

$sql = "INSERT INTO `gender`(`type`) VALUES ('$type')";

$query = mysqli_query($conn, $sql); // working stage

if ($query) {
    header("Location:gender.php");
}

// var_dump($query);

// echo $sql;
