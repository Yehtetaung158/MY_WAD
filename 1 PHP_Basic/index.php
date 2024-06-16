<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <?php echo "Hi I am PHP"; ?>
 -->
    <h1>
        <?php echo "hi I am php"; ?>
    </h1>

    <!-- if -->
    <?php if (true) { ?>
        <h1>I am true</h1>
    <?php } else { ?>
        <h1>I am false</h1>
    <?php } ?>

    <!-- php array -->

    <?php
    $fruits = array("Apple", "Banana", "Orange", "Grapes", "Watermelon");

    ?>

    <pre>
    <?php print_r($fruits) ?>
</pre>

<?php 
 $assoc= array(
    "mhName" => "Ye Htet Aung",
    "myAge" => 24,
    "myJob" => array("Blah Blah" , "Nay Kyar Kwar Shi"),
    "gf" => false,
    "isHandsome" => true,
 );
 
?>

<pre>
    <?php
         print_r($assoc);
         print_r($assoc["myName"])
    ?>
</pre>

</body>

</html>