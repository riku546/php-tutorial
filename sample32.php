<?php
class Item
{
    protected int $unit;

    public function __construct(int $unit)
    {
        $this->unit = $unit;
    }

    public function getUnit(): string
    {
        return $this->unit . "個" . "<br>";
    }

}

class Book extends Item
{
    private int $page;

    public function __construct(int $unit, int $page)
    {
        parent::__construct($unit);
        $this->page = $page;

    }

    public function getUnit(): string
    {
        return $this->unit . "冊";
    }

}

$eraser = new Item(5);
echo $eraser->getUnit();

$book = new Book(2);
echo $book->getUnit();
