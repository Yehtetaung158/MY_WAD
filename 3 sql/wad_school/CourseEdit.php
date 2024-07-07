<?php

require_once "./db_connection.php";


$id=$_GET["row_id"];

$sql="SELECT * FROM `courses` WHERE id=$id";

$query=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($query);

?>

<?php require("./template/header.php"); ?>
<?php include("./template/sidebar.php"); ?>
<h1>Edit Project</h1>
    <form action="./CourseUpdate.php" method="post" class=" flex gap-2" style="display: flex;">
    <input type="hidden" name="id" value="<?= $id ?>" placeholder="name" required>
    <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" name="title" value="<?= $row["title"] ?>"  placeholder="title" required>
    <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"  value="<?= $row["short"] ?>" type="text" name="short" placeholder="short" required>
    <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" name="fee" value="<?= $row["fee"] ?>" placeholder="fee" required>
    <button class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" type="submit">Update</button>
</form>
</body>
</html>