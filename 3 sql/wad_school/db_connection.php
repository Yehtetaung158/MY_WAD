<?php

// print_r($_POST);

$conn= mysqli_connect("localhost","Yehtetaung",12345678,"wad_school");

// var_dump($con);

if(!$conn){
    die(mysqli_connect_errno());
}