<?php
if (empty($_POST["breadth"]) || empty($_POST["width"])) {
    die("need all input");
}

?>
        <?php include("./template/header.php") ?>
        <?php
        include("./template/side_bar.php")
        ?>
        <section class=" bg-gray-100 p-6 rounded-lg">

            <ol class="flex items-center whitespace-nowrap mb-4">
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
                        Home
                    </a>
                    <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </li>
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
                        Calculator app
                        <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </a>
                </li>
            </ol>

            <hr class=" border-gray-300">

            <?php

            $breadth = $_POST["breadth"];
            $width = $_POST["width"];

            $area = $breadth * $width;

            $fileName = "area_records.txt";
            if (!file_exists($fileName)) {
                touch($fileName);
            }
            $fileStream = fopen($fileName, "a");
            fwrite($fileStream, "\n $breadth * $width = $area");
            fclose($fileStream);
            ?>
            <p class=" text-center text-3xl">
                <?= $area ?> Sqft
            </p>

            <div class=" flex flex-row items-center justify-center gap-4 ">
                <a href="./index.php" class="py-3  px-4 inline-flex w-full justify-center mt-8 items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Calculate Again
                </a>
                <a href="./records-list.php" class="py-3 mt-8 justify-center px-4 inline-flex w-full  items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500 dark:hover:border-blue-600">
                    Records list
                </a>
            </div>

        </section>
   <?php include('./template/footer.php') ?>