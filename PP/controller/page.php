<?php
require_once __DIR__ . "/../functions.php";

function home()
{
    return views("home");
};

function about()
{
    return views("about");
};

function services()
{
    return views("services");
};

// function batches()
// {
//     $row = get("SELECT * FROM batches LIMIT 10");
//     // dd($row);
//     return views("batches", ["batches" => $row]);
// };
