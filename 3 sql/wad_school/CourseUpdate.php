<?php

print_r($_POST);

require_once "./db_connection.php";

$id=$_POST["id"];
$title=$_POST["title"];
$short=$_POST["short"];
$fee=$_POST["fee"];
$sql="UPDATE `courses` SET title='$title',short='$short',fee=$fee WHERE id=$id";
print_r($sql);

$query=mysqli_query($conn,$sql);
if($query){
    header("Location:./index.php");
}