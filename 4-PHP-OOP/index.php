<?php

// require_once "./classes/Phone.php";
// require_once "./db-test.php";
require_once "./classes/Db.php";
require_once "./classes/QueryBuilder.php";
require_once "./classes/TextBuilder.php";
// system("clear");
echo ("<pre>");
$myDb = new Db;
$qb = new QueryBuilder("students");
$myTextqb=new TextBuilder("");

$sql = $qb->select(["id", "name", "date_of_birth"])
    // ->where("id", "=", "1")
    ->where("gender_id", "=", "1")
    ->orderBy("name", "DESC")
    ->orderBy("id", "DESC")
    ->limit(10)
    ->sql();
$students = $myDb->all($sql);
// print_r($students);

$text = $myTextqb->append("Hello, ")
    ->append("world!")
    ->newLine()
    ->append("This is a simple text builder.")
    ->newLine()
    ->append("It allows method chaining like QueryBuilder.")
    ->getText();

echo $text;


// $myPhone=new Phone("SamSung","s24");

// $myPhone->name="Samsung";
// $myPhone->model="s24";
// echo $myPhone->makeCall();
// echo "<br>";
// echo $myPhone->useingInternet();

// print_r($conn);

// $mydb=new Db;

// $student=$mydb->all("select * from students limit 10");

// print_r($student);