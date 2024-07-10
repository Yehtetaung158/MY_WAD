<?php require("./template/header.php"); ?>
<?php include("./template/sidebar.php"); ?>
<?php
require_once "./db_connection.php";

$id = $_GET["row_id"];

$sql = "SELECT * FROM `batches` WHERE id=$id";

$query = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($query);
// die(print_r($row));
?>

<h1 class=" py-3">Batches</h1>

<form action="./batch_editData_save.php" method="post" style="display: flex;">
    <input type="hidden" name="id" value=<?= $row["id"]?>>
    <div class=" flex flex-col gap-2 w-full">
        <div class=" flex flex-col">
            <label for="Name">Batch Name</label>
            <input value=<?= $row["name"] ?> class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" name="Name" placeholder="name" required>
        </div>
        <div class=" flex flex-col">
            <label for="course_id">Select Course</label>
            <select class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none  dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
            name="course_id">

                <?php
                $sql = "SELECT * FROM courses";
                $query = mysqli_query($conn, $sql);
                while ($course_row = mysqli_fetch_assoc($query)) :
                ?>
                    <option selected value=<?= $course_row["id"] ?>><?= $course_row["title"] ?></option>
                <?php endwhile; ?>
            </select>
        </div>
        <div class=" flex flex-col">
            <label for="start_date">Start Date</label>
            <input value=<?= $row["start_date"] ?> class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="date" name="start_date" placeholder="start_date" required>
        </div>
        <div class=" flex gap-3">
            <div class=" flex flex-col">
                <label for="start_time">Start Time</label>
                <input  value=<?= $row["start_time"] ?> class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="time" name="start_time" placeholder="start_time" required>
            </div>
            <div class=" flex flex-col">
                <label for="end_time">End Time</label>
                <input  value=<?= $row["end_time"] ?> class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="time" name="end_time" placeholder="end_time" required>
            </div>
        </div>
        <div class=" flex flex-col">
            <label for="student_limit">Student Limit</label>
            <input value=<?= $row["student_limit"] ?> class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="number" name="student_limit" placeholder="student_limit" required>
        </div>
        <div class="flex my-4">
            <input 
            <?= $row[['is_register_open'] == 1 && "checked"] ?>
            type="checkbox" name="is_register_open" value=<?=$row['is_register_open']?> class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-default-checkbox" checked>
            <label for="hs-default-checkbox" class="text-sm text-gray-500 ms-3 dark:text-neutral-400"     >Open</label>
        </div>

        <button type="submit" class=" flex  py-3 px-4 inl justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" type="submit">Update</button>
    </div>
</form>
<?php include("./template/footer.php") ?>