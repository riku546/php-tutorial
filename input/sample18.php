<?php
$pref = [
    "hokaido" => "hokaido",
    "aomori" => "aomori",
    "iwate" => "iwate",
];

function print_list($list)
{
    foreach ($list as $key => $value) {
        echo $key, ":", $value, "<br>";
    }
    ;
};

$a = [
    "a" => "a",
    "b" => "b",
    "c " => "c",
];

print_list($pref);
print_list($a);
