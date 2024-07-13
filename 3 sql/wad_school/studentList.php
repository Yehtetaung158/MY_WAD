<?php require("./template/header.php"); ?>
<?php include("./template/sidebar.php"); ?>
<?php
echo "<pre>";
require_once "./db_connection.php";
?>
<h1 class=" py-3">Students' List</h1>
<div class=" w-full flex flex-col">
    <div class=" flex justify-end">
        <a href="./batchCreate.php" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" type="submit">Open Batch</a>
    </div>
    <div class=" w-full flex overflow-auto">
        <table class=" divide-y divide-gray-200 ">
            <thead>
                <tr>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">#</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Student Info</th>
                    
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Birthday</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Pocket monry</th>
                    <th scope="col" class="px-6 text-end py-3 text-xs font-medium text-gray-500 uppercase">Created </th>
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php
                $sql = "SELECT *,students.id as student_id FROM `students` LEFT JOIN nationlity ON nationlity.nationlity_id= students.nationality_id LEFT JOIN gender ON gender.id = students.gender_id LIMIT 0,5";

                $query = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($query)) :
                ?>
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"><?= $row['student_id'] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"><?= $row['name'] ?>
                        <br>
                        <span class=" bg-gray-300 text-gray-800 px-2 py-1 rounded-full text-xs "><?=$row['type'] ?></span>
                        <span class=" bg-gray-300 text-gray-800 px-2 py-1 rounded-full text-xs "><?=$row['nation'] ?></span>
                    </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"><?= $row['date_of_birth'] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"><?= $row['pocket_money'] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"><?= date("d M Y",strtotime($row['created_at'])) ?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                            <a type="button" href="./batch-edit.php?row_id=<?= $row['student_id'] ?>" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>

                            </a>
                            <a href="./batch-delete.php?row_id=<?= $row['student_id'] ?>" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600  disabled:opacity-50 disabled:pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>

                            </a>
                        </td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</div>


<?php include("./template/footer.php") ?>