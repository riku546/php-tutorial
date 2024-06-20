<?php
// class Item
// {

//     public string $name;
//     public int $price;
//     public function __construct(string $name, int $price = 0)
//     {
//         $this->name = $name;
//         $this->price = $price;
//     }

//     public function setPrice(int $price)
//     {
//         if ($price < 0) {
//             return false;
//         }
//         $this->price = $price;
//     }

//     public function getPrice(string $end = ""): string
//     {
//         return number_format($this->price) . $end;
//     }

// }

// class Book extends Item
// {
//     public int $page;
// }

// $php_basic = new Book("php 入門");
// $php_basic->setPrice(1222);
// $php_basic->page = 100;

// echo $php_basic->name . "<br>";
// echo $php_basic->getPrice("円") . "<br>";
// echo $php_basic->page . "ページ ";
