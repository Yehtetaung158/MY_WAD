<?php

require_once "./db_connection.php";


$id=$_GET["row_id"];


$sql= "DELETE FROM `courses` WHERE id=$id";

$quer= mysqli_query($conn,$sql);

if($sql){
    header("Location: ./index.php");
}