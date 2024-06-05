<?php

// string Function

$myName = "mg ye htet aung";
$myText = "မြန်မာနိုင်ငံမှာ ပြဿနာဖြစ်နေ ပါသည်။";

// echo strlen($myName);
// echo "\n";
// echo strtoupper($myName);
// echo "\n";
// echo strtolower($myName);
// echo "\n";
// echo str_word_count($myName);
// echo "\n";
// echo ucfirst($myName);
// echo "\n";
// echo ucwords($myName);
// echo "\n";
// echo strrev($myName);
// echo "\n";
// echo strpos($myName,"htet");
// echo "\n";
// echo str_replace("htet","yint",$myName);
// echo "\n";
// // echo mb_substr($myText,14,19);
// echo mb_substr($myText,0,16);
echo "\n";
echo str_pad("$",8,"0",STR_PAD_BOTH);
echo "\n";
print_r(
explode(" ",$myName)
);
echo "\n";
echo implode("-",["a","b","c"]);
echo "\n";
$newText="mmmmmyehemmmteaungxxxxxx";
echo trim($newText,"m");
echo "\n";
echo "\n";
