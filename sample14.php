<?php
$pref["hokaido"] = "hokaido";
$pref["aomori"] = "aomori";
$pref["iwate"] = "iwate";

$pref = [
    "hokaido" => "hokaido",
    "aomori" => "aomori",
    "iwate" => "iwate",
];

$mypref = "aomori";

echo $pref[$mypref];


$pref["hokaido"] = [
    "aka",
    "kaiswa",
    "tobetu",
];

echo $pref["hokaido"][0];

