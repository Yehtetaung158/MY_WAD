<?php

require_once "./classes/Phone.php";

$myPhone=new Phone("SamSung","s24");

// $myPhone->name="Samsung";
// $myPhone->model="s24";
echo $myPhone->makeCall();
echo "<br>";
echo $myPhone->useingInternet();