<?php require("./template/header.php"); ?>
<?php include("./template/sidebar.php"); ?>
<?php
echo "<pre>";
$conn = mysqli_connect("localhost", "Yehtetaung", 12345678, "wad_shop");

if (!$conn) {
    die(mysqli_connect_errno());
}
?>

<h1 class=" py-3">Customers' Datas</h1>

<form action="./cus_data_save.php" method="post" class=" flex gap-2" method="post" style="display: flex;">
    <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" name="Name" placeholder="name" required>

    <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="date" name="Birthday" placeholder="Birthday" required>
    <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="number" name="Phone" placeholder="phone" required>
    <div class="flex flex-col">
        <div class="flex items-center gap-2">
            <input type="radio" name="Gender" value="male" class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" id="hs-default-radio">
            <label for="hs-default-radio" class="text-sm text-gray-500 ms-2">male</label>
        </div>
        <div class=" flex justify-center items-center gap-2">
            <input type="radio" value="female" name="Gender" class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" id="hs-checked-radio" checked="">
            <label for="hs-checked-radio" class="text-sm text-gray-500 ms-2">female</label>
        </div>
    </div>
    <button class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" type="submit">Create</button>
</form>

<table class="min-w-full divide-y divide-gray-200">
    <thead>
        <tr>
            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name</th>
            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Gender</th>
            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Birthday</th>
            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Phone</th>
            <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-200">
        <?php
        $sql = "SELECT * FROM customer_datas";

        $query = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($query)) :
        ?>
            <tr class="hover:bg-gray-100">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"><?= $row['Name'] ?></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"><?= $row['Gender'] ?></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"><?= $row['Birthday'] ?></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"><?= $row['Phone'] ?></td>
                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                    <a type="button" href="./cus-edit.php?row_id=<?= $row['id'] ?>"class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>

                    </a>
                    <a href="./cus-delete.php?row_id=<?= $row['id'] ?>" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600  disabled:opacity-50 disabled:pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>

                    </a>
                </td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>

<?php include("./template/footer.php") ?>