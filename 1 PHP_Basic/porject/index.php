      
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

            <form action="./area.php" method="post">
                <div class="max-w-sm">
                    <label for="width" class="block text-sm font-medium mb-2">Width</label>
                    <input type="number" name="width" id="width" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none ">
                </div>
                <div class="max-w-sm">
                    <label for="breadth" class="block text-sm font-medium mb-2">Breadth</label>
                    <input type="number" name="breadth" id="breadth" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none ">
                </div>
                <button type="submit" class="py-3  px-4 inline-flex w-full justify-center mt-8 items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Calculate
                </button>
            </form>

        </section>
<?php include("./template/footer.php") ?>