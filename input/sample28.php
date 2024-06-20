<?php
class Item
{

    public function __construct(string $name, int $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice($end = ""): string
    {
        return number_format($this->price) . $end;
    }

}

$php_basic = new Item("php 入門");

echo $php_basic->name . "<br>";
echo $php_basic->getPrice("円");


