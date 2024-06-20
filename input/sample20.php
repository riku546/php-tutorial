<?php

function sum(...$arr)
{
    $total = 0;
    foreach ($arr as $num) {
        $total += $num;
    }
    
    return $total;
}

echo sum(1 ,4, 6, 6);
