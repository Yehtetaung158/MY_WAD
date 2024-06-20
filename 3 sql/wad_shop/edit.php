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

<?php require("./template/header.php"); ?>
<?php include("./template/sidebar.php"); ?>
<h1>Edit Project</h1>
    <form action="./update.php" method="post" class=" flex gap-2" style="display: flex;">
    <input type="hidden" name="id" value="<?= $id ?>" placeholder="name" required>
    <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" name="name" value="<?= $row["name"] ?>"  placeholder="name" required>
    <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"  value="<?= $row["price"] ?>" type="number" name="price" placeholder="price" required>
    <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" name="stock" value="<?= $row["stock"] ?>" placeholder="stock" required>
    <button class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" type="submit">Update</button>
</form>
</body>
</html>