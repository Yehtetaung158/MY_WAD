<?php require("./template/header.php"); ?>
<?php include("./template/sidebar.php"); ?>
<?php
$conn = mysqli_connect("localhost", "Yehtetaung", 12345678, "wad_shop");
// var_dump($conn);

if (!$conn) {
    die(mysqli_connect_errno());
}

$id = $_GET["row_id"];

$sql = "SELECT * FROM `customer_datas` WHERE id=$id";

$query = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($query);

?>

<form action="./cus-update.php" method="post" class=" flex gap-2" method="post" style="display: flex" class="mt-6">
    <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="hidden" name="id" placeholder="id"  value="<?= $row["id"] ?>" required>
    <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" name="Name" placeholder="name" value="<?= $row["Name"] ?>" required>
    <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="date" name="Birthday" placeholder="Birthday" value="<?= $row["Birthday"] ?>" required>
    <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="number" name="Phone" placeholder="phone" value="<?= $row["Phone"] ?>" required>
    <div class="flex flex-col">
        <div class="flex items-center gap-2">
            <input type="radio" name="Gender" class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" id="hs-default-radio" value='male' <?php if ($row["Gender"] === 'male') echo 'checked'; ?>>
            <label for="hs-default-radio"  class="text-sm text-gray-500 ms-2">male</label>
        </div>
        <div class=" flex justify-center items-center gap-2">
            <input type="radio" <?php if ($row["Gender"] === 'female') echo 'checked'; ?>  value="female" name="Gender" class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" id="hs-checked-radio" >
            <label for="hs-checked-radio" class="text-sm text-gray-500 ms-2">female</label>
        </div>
    </div>
    <button class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" type="submit">Update</button>
</form>
<?php include("./template/footer.php") ?>