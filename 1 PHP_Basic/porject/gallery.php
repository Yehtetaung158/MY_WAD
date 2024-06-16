<?php include("./template/header.php") ?>
<?php include("./template/side_bar.php") ?>
<section class="">
    <form enctype="multipart/form-data" method="post" action="./gallery-process.php">
        <label class="block">
            <span class="sr-only">Choose profile photo</span>
            <input type="file" name="upload[]" multiple class="block w-full text-sm text-gray-500
        file:me-4 file:py-2 file:px-4
        file:rounded-lg file:border-0
        file:text-sm file:font-semibold
        file:bg-blue-600 file:text-white
        hover:file:bg-blue-700
        file:disabled:opacity-50 file:disabled:pointer-events-none
        dark:text-neutral-500
        dark:file:bg-blue-500
        dark:hover:file:bg-blue-400
      ">
        </label>
        <button type="submit" class=" mt-8 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
            Upload
        </button>
    </form>

    <?php
    $photos = array_filter(scandir("photo"), fn ($el) => $el != "." && $el != "..");
    ?>

    <div class=" columns-2">
        <?php foreach ($photos as $photo) : ?>
            <div class=" inline-block relative group">
                <img class="mb-3" src="./photo/<?= $photo ?>">
                <a onclick="return confirm('Are you sure to delete')" href="./gallery-photo-delete.php?file_name=<?= $photo ?>" class=" absolute right-1 bottom-1 group-hover:inline-flex hidden py-3 px-4  items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-100 text-red-800 hover:bg-red-200 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-red-900 dark:text-red-500 dark:hover:text-red-400">
                    Button
                </a>
            </div>
        <?php endforeach ?>
    </div>

</section>
<?php include("./template/footer.php") ?>