<?php require("./template/header.php"); ?>
<?php include("./template/sidebar.php"); ?>
<?php
echo "<pre>";
require_once "./db_connection.php";
?>

<section class=" bg-gray-100 p-10 rounded-lg">

    <ol class="flex items-center whitespace-nowrap " aria-label="Breadcrumb">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="gender-create-list.php">
                Manage gender
            </a>
            <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6" />
            </svg>
        </li>

        <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
            Edit gender
        </li>
    </ol>

    <hr class="  border-gray-300 my-4">



    <?php

    $id = $_GET["row_id"];
    // die($id);

    $sql = "SELECT * FROM nationlity WHERE nationlity_id=$id";
    // echo $sql;

    $query = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($query);

    // print_r($row);



    ?>

    <form action="./nationality-update.php" method="post" class=" flex gap-2">
        <input type="hidden" name="id" value=<?= $row["nationlity_id"]?>>
        <input value=<?=$row['nation']?> class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Nationality Name" type="text" name="nation" required>
        <input value=<?=$row['nation_code']?> class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Nationality Code" type="text" name="nation_code" required>
        <button class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Add</button>
    </form>

</section>
<?php include("./template/footer.php"); ?>