<?php

header("Contect-Type:appalication/json");

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    $message = json_encode(["message" => "POST method only"]);
    die($message);
}
if (empty($_POST["from_crrency"] || empty($_POST["to_currency"]) || empty($_POST["amount"]))) {
    $message = json_encode(["message" => "Required all input amount, from_currecy and to_currency"]);
    die($message);
}

$rateJson = file_get_contents("https://forex.cbm.gov.mm/api/latest");
$rateObj = json_decode($rateJson, true);
$rates = $rateObj["rates"];

$from = $_POST["from_crrency"];
$fromRate = str_replace(",", "", $rates[$from]);
$to = $_POST['to_currency'];
$toRate = str_replace(",", "", $rates[$to]);

$result = $fromRate / $toRate * $_POST["amount"];
$_POST["result"] =round($result,2);

echo json_encode($_POST);