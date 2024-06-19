<?php 


echo "<pre>";
$conn = mysqli_connect("localhost", "Yehtetaung", 12345678, "wad_shop");

if (!$conn) {
    die(mysqli_connect_errno());
}
print_r($_POST);

$Name=$_POST['Name'];
$Gender=$_POST['Gender'];
$Birthday=$_POST['Birthday'];
$Phone=$_POST['Phone'];


$sql="INSERT INTO customer_datas (Name,Gender,Birthday,Phone) VALUE ('$Name',
'$Gender','$Birthday','$Phone')";

echo $sql;

$query=mysqli_query($conn,$sql);
// var_dump($query);
if($query){
    header("Location:./customer-data.php");
}