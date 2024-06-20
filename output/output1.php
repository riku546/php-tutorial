<?php
interface Calc
{
    public function getTotal(): int;
    public function getAvg(): int;
    public function Calc($points);

}

class Math implements Calc
{
    private int $total;
    private int $avg;

    public function Calc($points)
    {
      $this -> total = 0;
      $this -> avg = 0;

        foreach ($points as $point) {
            $this->total += $point;
        }

        $this->avg = $this->total / count($points);
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function getAvg(): int
    {
        return $this->avg;
    }

}

class Japanese implements Calc
{
    private int $total;
    private int $avg;

    public function Calc($points)
    {
      $this -> total = 0;
      $this -> avg = 0;

        foreach ($points as $point) {
            $this->total += $point;
        }

        $this->avg = $this -> total / count($points);
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function getAvg(): int
    {
        return $this->avg;
    }

}

$math = new Math();
$ja = new Japanese();

$math_points = [50, 77, 88, 90, 100];
$ja_points = [40, 67, 78, 80, 90];

$math->Calc($math_points);
$ja->Calc($ja_points);

echo $math->getTotal() . "<br>";
echo $math->getAvg() . "<br>";
echo $ja->getTotal() . "<br>";
echo $ja->getAvg() . "<br>";
