<?php include("./template/header.php") ?>
<?php include("./template/side_bar.php") ?>

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
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="./exchange.php">
                Exchange app
                <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </li>
    </ol>

    <hr class=" border-gray-300">

    <?php
    $contents = file_get_contents("https://forex.cbm.gov.mm/api/latest");
    $data = json_decode($contents);
    // var_dump($data->rates);
    ?>
    <form action="./echange-process.php" method="post">

        <div class=" flex flex-col gap-4">
            <div>
                <label for="amount" class="block text-sm font-medium mb-2">From currency amount</label>
                <input type="number" name="amount" id="amount" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none ">
            </div>
            <div class=" flex items-center gap-4 justify-between bg-blue-500">
                <select class="py-3 px-4 pe-9  w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" name="from_currency">
                    <option>From Currency</option>
                    <?php foreach ($data->rates as $key => $rate) : ?>
                        <option value="<?= htmlspecialchars($key)?>-<?= htmlspecialchars($rate)?>"><?php echo htmlspecialchars($key); ?></option>
                    <?php endforeach ?>
                </select>
                <select class="py-3 px-4 pe-9  w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" name="to_currency">
                    <option selected="">To currency</option>
                    <?php foreach ($data->rates as $key => $rate) : ?>
                        <option value="<?= htmlspecialchars($key)?>-<?= htmlspecialchars($rate)?>"><?php echo htmlspecialchars($key); ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>

        <button type="submit" class="py-3  px-4 inline-flex w-full justify-center mt-8 items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
            Calculate
        </button>
    </form>

</section>

<?php include("./template/footer.php") ?>