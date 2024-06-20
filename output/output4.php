<?php
trait Method
{
    public function getTotal(): int
    {
        return $this->total;
    }

    public function getAvg(): int
    {
        return $this->avg;
    }

}

class Subject
{
    protected int $total;
    protected int $avg;

    public function Calc($points)
    {
        $this->total = 0;
        $this->avg = 0;

        foreach ($points as $point) {
            $this->total += $point;
        }

        $this->avg = $this->total / count($points);
    }
}

class Math extends Subject
{
    use Method;

}

class Ja extends Subject
{
    use Method;
}


$math = new Math();
$ja = new Ja();

$math_points = [50, 77, 88, 90, 100];
$ja_points = [40, 67, 78, 80, 90];

$math->Calc($math_points);
$ja->Calc($ja_points);

echo $math->getTotal() . "<br>";
echo $math->getAvg() . "<br>";
echo $ja->getTotal() . "<br>";
echo $ja->getAvg() . "<br>";