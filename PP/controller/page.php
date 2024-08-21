<?php
require_once __DIR__."/../functions.php";

function home(){
    return views("home");
};

function about(){
    return views("about");
};

function services(){
    return views("services");
};