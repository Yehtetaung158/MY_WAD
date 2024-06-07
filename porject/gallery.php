<?php include("./template/header.php") ?>
<?php include("./template/side_bar.php") ?>
<section class="max-w-sm">
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
    $photos = array_filter(scandir("photo"),fn($el)=>$el!= "." && $el!="..");
    ?>

    <div class=" columns-2" >
        <?php foreach ($photos as $photo) : ?>
            <img class=" mb-3" src="./photo/<?= $photo?>">
        <?php endforeach ?>
    </div>

</section>
<?php include("./template/footer.php") ?>