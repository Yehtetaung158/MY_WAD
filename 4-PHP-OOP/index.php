<?php

require_once "./classes/Phone.php";
require_once "./db-test.php";
require_once "./classes/Db.php";
require_once "./classes/QuilderBuilder.php";
system("clear");
$qb= new QueryBuilder;

print_r($qb->a()->b()->getData()->c());

$myPhone=new Phone("SamSung","s24");

// $myPhone->name="Samsung";
// $myPhone->model="s24";
// echo $myPhone->makeCall();
// echo "<br>";
// echo $myPhone->useingInternet();

// print_r($conn);

$mydb=new Db;

$student=$mydb->all("select * from students limit 10");

// print_r($student);
