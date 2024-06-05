<?php


// static
function run (){
    static $z=5;
    echo $z;
    $z++;
}

run();
run();
run();
run();
run();
