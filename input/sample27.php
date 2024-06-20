<?php
class Item
{
    public string $name;
    public int $price;

    public function getPrice($end = ""): string
    {
        return number_format($this->price) . $end;
    }

}

$php_basic = new Item();
$php_basic->name = "php 入門";
$php_basic->price = 1500;

echo $php_basic->name . "<br>";
echo $php_basic->getPrice("円");
