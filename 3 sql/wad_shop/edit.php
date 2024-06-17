<?php

$conn=mysqli_connect("localhost","Yehtetaung",12345678,"wad_shop");
// var_dump($conn);
if(!$conn){
    die(mysqli_connect_errno());
}

$id=$_GET["row_id"];

$sql="SELECT * FROM `products` WHERE id=$id";

$query=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Edit Project</h1>
    <form action="./update.php" method="post" style="display: flex;">
        <input type="hidden" name="id" value="<?= $id ?>" placeholder="name" required>
        <input type="text" name="name" value="<?= $row["name"] ?>" required>
        <input type="number" name="price" 
        value="<?= $row["price"] ?>"placeholder="price" required>
        <input type="text" name="stock" 
        value="<?= $row["stock"] ?>"placeholder="stock" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>