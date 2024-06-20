<?php
declare(strict_type = 1);
$tax = 10; //グーロバル変数

function calc(int $num1, int $num2): int
{
    global $tax;
    return ($num1 + $num2) / $tax;
}

echo calc(19, 12);
