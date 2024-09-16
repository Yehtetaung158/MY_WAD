<?php

// echo ("I am coursee");

function index()
{
    // $conn = mysqli_connect("localhost", "Yehtetaung", 12345678, "wad_school");
    // $sql = ;

    // $query = mysqli_query($conn, $sql);

    // $rows = [];

    // while ($row = mysqli_fetch_assoc($query)) {
    //     array_push($rows, $row);
    // }

    // header("Content-Type:application/json");

    // // print_r($rows);
    // echo json_encode($rows);
    $rows=get("SELECT * FROM courses LIMIT 10");
    return views("courses",["courses"=>$rows]);
};

function delete(){
    $id = $_GET['id'];
    if (runQuery("DELETE FROM courses WHERE id=$id")) {
        redirect(url("/courses"));
    }
}