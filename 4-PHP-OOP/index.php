<?php

require_once "./classes/Phone.php";

$myPhone=new Phone;

$myPhone->name="Samsung";
$myPhone->model="s24";
echo $myPhone->makeCall();
echo $myPhone->useingInternet();