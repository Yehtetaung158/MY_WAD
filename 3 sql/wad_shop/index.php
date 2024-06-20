<?php require("./template/header.php"); ?>
<?php include("./template/sidebar.php"); ?>
<?php
echo "<pre>";
$conn = mysqli_connect("localhost", "Yehtetaung", 12345678, "wad_shop");

if (!$conn) {
    die(mysqli_connect_errno());
}
?>

<h1>Create Project</h1>
<form action="./save.php" class=" flex gap-2" method="post" style="display: flex;">
    <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" name="name" placeholder="name" required>
    <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="number" name="price" placeholder="price" required>
    <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" name="stock" placeholder="stock" required>
    <button class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" type="submit">Create</button>
</form>
<table class="min-w-full divide-y divide-blue-500">
    <thead>
        <tr>
            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">#</th>
            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name</th>
            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Price</th>
            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Stock</th>
            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Create At</th>
            <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
        </tr>
    </thead>
    <tbody class=" divide-gray-200">
        <?php
        $sql = "SELECT * FROM products";

        $query = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($query)) :
        ?>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"><?= $row['id'] ?></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"><?= $row['name'] ?></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"><?= $row['price'] ?></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"><?= $row['stock'] ?></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"><?= $row['create_at'] ?></td>
                <td class=" flex gap-2 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"><a href="./edit.php?row_id=<?= $row['id'] ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>

                    </a>   <a onclick="return confirm('Are you sure to delete')" href="./delete.php?row_id=<?= $row['id'] ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>

                    </a></td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>
<?php include("./template/footer.php"); ?>