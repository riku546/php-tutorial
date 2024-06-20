<?php
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

    public function getTotal()
    {
        return $this->total;
    }

    public function getAvg()
    {
        return $this->avg;
    }

}

class Math extends Subject
{
    public function getTotal()
    {
        return "数学" . $this -> total;
    }

    public function getAvg()
    {
        return "数学" . $this -> avg ;
    }
}

class Ja extends Subject
{
    public function getTotal()
    {
        return "国語" . $this -> total;
    }

    public function getAvg()
    {
        return "国語" . $this->avg;
    }
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
