<?php 

// echo ("public");

$indexPath = __DIR__ . "/../index.php";

if (file_exists($indexPath)) {
    require_once $indexPath;
} else {
    echo "index.php not found.";
}
