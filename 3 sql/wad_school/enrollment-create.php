<?php require("./template/header.php"); ?>
<?php include("./template/sidebar.php"); ?>
<?php
echo "<pre>";
require_once "./db_connection.php";

$id = $_GET['row_id'];

$sql = "SELECT * FROM `students` WHERE id=$id";
$query = mysqli_query($conn, $sql);
$student = mysqli_fetch_assoc($query);
// print_r($student);
$batchSql = "SELECT * FROM `batches`";
$batch_query = mysqli_query($conn, $batchSql);
?>
<h1 class=" py-3">Batches</h1>
<h1 class=" py-3">Student <span class=" font-bold text-lg"><?=$student['name']?></span> enroll for:</h1>
<form action="./enrollment-store.php" method="get">
    <input type="hidden" name="student_id" value="<?= $student['id']?>">
    <label for="batch_id">Select Course</label>
    <select class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none  dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" name="batch_id">
        <?php
        while ($batches_row = mysqli_fetch_assoc($batch_query)) :
        ?>
            <option value=<?= $batches_row["id"] ?>><?= $batches_row["name"] ?></option>
        <?php endwhile; ?>
    </select>
    <button class=" flex  py-3 px-4 inl justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" type="submit">Create</button>
</form>

<?php include("./template/footer.php") ?>