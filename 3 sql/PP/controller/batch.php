<?php

function index()
{
    $row = get("SELECT * FROM batches LIMIT 10");
    // dd($row);
    return views("batches", ["batches" => $row]);
};


function delete()
{
    $id = $_GET['id'];
    if (runQuery("DELETE FROM batches WHERE id=$id")) {
        redirect(url("/batches"));
    }
}
