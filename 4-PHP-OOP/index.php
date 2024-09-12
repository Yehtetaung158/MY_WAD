<?php
echo ("<pre>");

require_once "./autoload.php";

$batches=new Batch;
print_r($batches->select()->all());

// $student=new Student;
// print_r($student->select(["id","name"])->limit(5)->all());

$child = new Childclass("aaa","bbb","ccc","ddd","eee");
// print_r($child);

$myDb = new Db;
$qb = new QueryBuilder("students");
$myTextqb = new TextBuilder("");

$sql = $qb->select(["id", "name", "date_of_birth"])
    // ->where("id", "=", "1")
    ->where("gender_id", "=", "1")
    ->orderBy("name", "DESC")
    ->orderBy("id", "DESC")
    ->limit(10)
    ->sql();
$students = $myDb->all($sql);
// print_r($students);

$textSql = $myTextqb->append("Hellos, ")
    ->append("world!")
    ->newLine()
    ->append("This is a simple text builder.")
    ->newLine()
    ->append("It allows method chaining like QueryBuilder.")
    ->getText();

// echo $textSql;
    
    
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

//traits--->
$request=new Request;
echo $request->File();
echo $request->Get();
echo $request->Post();