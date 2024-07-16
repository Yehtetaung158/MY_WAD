<?php

require_once "./db_connection.php";


// die(print($_GET['student_id']));

$batch_id = $_GET["batch_id"];
$student_id = $_GET["student_id"];



$sql = "INSERT INTO `enrollments`(`batch_id`, `student_id`) VALUES ('$batch_id','$student_id')";

$query = mysqli_query($conn, $sql);

if ($query) {
    header("Location:enroll-list.php");
}