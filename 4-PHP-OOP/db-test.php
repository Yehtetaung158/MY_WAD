<?php

echo "<pre>";

$servicename="localhost";
$username="Yehtetaung";
$password="12345678";
$dbname="wad_school";
$conn=new mysqli($servicename,$username,$password,$dbname);

$sql="select * from courses";
$query=$conn->query($sql
);

// print_r($query);
// print_r($query->fetch_assoc());
// print_r($query->fetch_assoc());
print_r($query->fetch_object());
print_r($query->fetch_object());