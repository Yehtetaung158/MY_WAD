<?php 


echo "<pre>";
require_once "./db_connection.php";


$name=$_POST['Name'];
$id=$_POST['id'];
$course_id=$_POST['course_id'];
$start_date=$_POST['start_date'];
$start_time=$_POST['start_time'];
$end_time=$_POST['end_time'];
$student_limit=$_POST['student_limit'];
$is_register_open=isset($_POST['is_register_open'])? $_POST['is_register_open']:0;

// die(print_r($_POST));


$sql="UPDATE batches SET name='$name',course_id=$course_id, start_date='$start_date',start_time='$start_time',student_limit=$student_limit,end_time='$end_time', is_register_open=$is_register_open WHERE id=$id";

echo $sql;

$query=mysqli_query($conn,$sql);
// var_dump($query);
if($query){
    header("Location:./batchList.php");
}