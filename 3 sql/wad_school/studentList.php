<?php require("./template/header.php"); ?>
<?php include("./template/sidebar.php"); ?>
<?php
echo "<pre>";
require_once "./db_connection.php";
?>
<?php


$sql = "SELECT *,students.id as student_id FROM `students` LEFT JOIN nationlity ON nationlity.nationlity_id= students.nationality_id LEFT JOIN gender ON gender.id = students.gender_id ";

$countSql = "SELECT count(id) as total_student FROM students ";

if ($_GET['q']) {
    $q = $_GET['q'];
    $sql .= "WHERE name LIKE '%$q%'";
    $countSql .= "WHERE name LIKE '%$q%'";
}

if (isset($_GET['sort_by']) && isset($_GET['order'])) {
    $sort_by = $_GET['sort_by'];
    $order = $_GET['order'];
    $sql .= "ORDER BY $sort_by $order";
}

$countQuery = mysqli_query($conn, $countSql);

$countRow = mysqli_fetch_assoc($countQuery);

$totalRecord = $countRow['total_student'];
$recordPerPaage = 5;

$totaPage = ceil($totalRecord / $recordPerPaage);

$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

$offset = ($currentPage - 1) * $recordPerPaage;

$sql .= " LIMIT $offset,$recordPerPaage";

$query = mysqli_query($conn, $sql);


?>
<div class=" w-full flex flex-col">
    <h1>Students' List</h1>
    <div class=" flex justify-between items-center h-12">
        <a href="./batchCreate.php" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" type="submit">Add Student</a>
        <form action="./studentList.php" method="get">
            <div class="flex rounded-lg shadow-sm">
                <input name="q" type="text" id="hs-trailing-button-add-on-with-icon" name="hs-trailing-button-add-on-with-icon" class="py-3 px-4 block w-full border-gray-200 shadow-sm rounded-s-lg text-sm focus:z-10 ">
                <button type="submit" class="w-[2.875rem] h-[2.875rem] flex-shrink-0 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-e-md border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </svg>
                </button>
            </div>
        </form>

    </div>
    <div class=" flex justify-end items-center my-2">
        <p>Showing result (<?= $totalRecord ?>)</p>
        <?php if (isset($_GET['q'])) : ?>
            <p>: search by '<?= $_GET['q'] ?>'</p>
            <p class=" bg-red-200 px-2 py-1 rounded-full flex">
                <a href="./studentList.php" class="flex items-center">
                    <span class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-red-700">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        <span>Clean Search</span>
                    </span>
                </a>
            </p>
        <?php endif; ?>
        <?php if (isset($_GET['sort_by']) && isset($_GET['order'])) : ?>
            <p>: search by '<?= $_GET['order'] == "asc" ? "Ascenting" : "Descending" ?>'</p>
            <p class=" bg-red-200 px-2 py-1 rounded-full flex">
                <a href="./studentList.php" class="flex items-center">
                    <span class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-red-700">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        <span>Clean Search</span>
                    </span>
                </a>
            </p>
        <?php endif; ?>
    </div>
    <div class="flex w-full items-center justify-center justify-self-center">
        <div class=" rounded-xl bg-red-100 flex mx-auto overflow-auto ">
            <table class=" divide-y divide-gray-200 border-2 border-gray-300 rounded-xl">
                <thead class=" rounded-xl">
                    <tr class=" rounded-xl">
                        <th scope="col" class=" rounded-xl px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">#</th>
                        <th scope="col" class=" flex px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                            <div class=" flex gap-2 items-center ">
                                <div>Student Info</div>
                                <div class=" flex flex-col">
                                    <a href="./studentList.php?sort_by=name&order=asc" class=" flex items-center size-3 justify-center hover:bg-gray-300" href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                        </svg>

                                    </a>
                                    <a href="./studentList.php?sort_by=name&order=desc" class=" flex items-center size-3 justify-center hover:bg-gray-300" href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                        </svg>

                                    </a>
                                </div>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Birthday</th>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Pocket monry</th>
                        <th scope="col" class="px-6 text-end py-3 text-xs font-medium text-gray-500 uppercase">Created </th>
                        <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">

                    <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                        <tr class="hover:bg-gray-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"><?= $row['student_id'] ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"><?= $row['name'] ?>
                                <br>
                                <span class=" bg-gray-300 text-gray-800 px-2 py-1 rounded-full text-xs "><?= $row['type'] ?></span>
                                <span class=" bg-gray-300 text-gray-800 px-2 py-1 rounded-full text-xs "><?= $row['nation'] ?></span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"><?= $row['date_of_birth'] ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"><?= $row['pocket_money'] ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"><?= date("d M Y", strtotime($row['created_at'])) ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                <a href="./enrollment-create.php?row_id=<?= $row['student_id'] ?>" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-green-500 hover:text-green-800 disabled:opacity-50 disabled:pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                                        <path d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM18.75 7.5a.75.75 0 0 0-1.5 0v2.25H15a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H21a.75.75 0 0 0 0-1.5h-2.25V7.5Z" />
                                    </svg>
                                </a>
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

    <?php
    $start = $currentPage > 3 ? $currentPage - 3 : 1;
    $end = $currentPage + 3 < $totaPage ? $currentPage + 3 : $totaPage;
    ?>

    <nav class="flex justify-start items-center gap-x-1 mt-2">
        <?php if (0 < $currentPage - 1) : ?>
            <a href="./studentList.php?page=<?= $currentPage - 1 ?>&<?= isset($_GET['q']) ? 'q=' . $_GET['q'] : '' ?>&<?= (isset($_GET['sort_by']) && isset($_GET['order'])) ? 'sort_by=' . $_GET['sort_by'] . "&" . 'order=' . $_GET['order'] : '' ?>" class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex jusify-center items-center gap-x-2 text-sm rounded-lg text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                <span aria-hidden="true" class="sr-only">Previous</span>
            </a>
        <?php endif ?>
        <div class="flex items-center gap-x-1">
            <?php for ($i = $start; $i <= $end; $i++) : ?>
                <a href="./studentList.php?page=<?= $i ?>&<?= isset($_GET['q']) ? 'q=' . $_GET['q'] : '' ?>&<?= (isset($_GET['sort_by']) && isset($_GET['order'])) ? 'sort_by=' . $_GET['sort_by'] . "&" . 'order=' . $_GET['order'] : '' ?>" class=" flex items-center justify-center z-50 size-[38px] <?= $i == $currentPage ? 'bg-gray-400 text-white' : ' border-2 border-gray-300' ?>   text-sm rounded-lg focus:outline-none " aria-current="page">
                    <p><?php echo ($i) ?></p>
                </a>
            <?php endfor; ?>
        </div>
        <?php if ($currentPage + 1 <= $totaPage) : ?>
            <a href="./studentList.php?page=<?= $currentPage + 1 ?>&<?= isset($_GET['q']) ? 'q=' . $_GET['q'] : '' ?>&<?= (isset($_GET['sort_by']) && isset($_GET['order'])) ? 'sort_by=' . $_GET['sort_by'] . "&" . 'order=' . $_GET['order'] : '' ?>" class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex jusify-center items-center gap-x-2 text-sm rounded-lg text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                <span aria-hidden="true" class="sr-only">Next</span>
                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        <?php endif ?>
    </nav>

    <?php include("./template/footer.php") ?>