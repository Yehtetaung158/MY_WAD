<?php

// echo ("I am coursee");

function index()
{
    $conn = mysqli_connect("localhost", "Yehtetaung", 12345678, "wad_school");
    $sql = "SELECT * FROM courses LIMIT 5";

    $query = mysqli_query($conn, $sql);

    $rows = [];

    while ($row = mysqli_fetch_assoc($query)) {
        array_push($rows, $row);
    }

    header("Content-Type:application/json");

    // print_r($rows);
    echo json_encode($rows);
};
