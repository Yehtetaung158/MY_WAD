<?php 


echo "<pre>";
require_once "./db_connection.php";

print_r($_POST);

$name=$_POST['Name'];
$course_id=$_POST['course_id'];
$start_date=$_POST['start_date'];
$start_time=$_POST['start_time'];
$end_time=$_POST['end_time'];
$student_limit=$_POST['student_limit'];
$is_register_open=$_POST['is_open'];


$sql="INSERT INTO batches (name,course_id,start_date,start_time,end_time,is_register_open,student_limit) VALUE ('$name',
'$course_id','$start_date','$start_time','$end_time','$is_register_open','$student_limit')";

echo $sql;

$query=mysqli_query($conn,$sql);
// var_dump($query);
if($query){
    header("Location:./batchList.php");
}