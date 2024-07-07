<?php require("./template/header.php"); ?>
<?php include("./template/sidebar.php"); ?>
<?php
echo "<pre>";
require_once "./db_connection.php";

?>

<h1 class=" py-3">Batches</h1>

<form action="./cus_data_save.php" method="post" method="post" style="display: flex;">
    <div class=" flex flex-col gap-2 w-full">
        <div class=" flex flex-col">
            <label for="Name">Batch Name</label>
            <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" name="Name" placeholder="name" required>
        </div>
        <div class=" flex flex-col">
            <label for="Name">Select Course</label>
            <select class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none  dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">

                <?php
                $sql = "SELECT * FROM courses";
                $query = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($query)) :
                ?>
                    <option value=<?= $row["id"]?>><?= $row["title"]?></option>
                <?php endwhile; ?>
            </select>
        </div>
        <button class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" type="submit">Create</button>
    </div>
</form>

<?php include("./template/footer.php") ?>