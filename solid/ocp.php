<?php

interface calculateMonthlySalary
{
    public function calculateSalary(Employee $employee);
}

class Employee
{
    private $name;
    private $type;
    private $salary;

    public function __construct($name, $type, $salary)
    {
        $this->name = $name;
        $this->type = $type;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

class FullTimeEmployee implements calculateMonthlySalary
{

    public function calculateSalary(Employee $employee)
    {

        return $employee->getSalary();

    }
}

class PartTimeEmployee implements calculateMonthlySalary
{

    public function calculateSalary(Employee $employee)
    {

        return $employee->getSalary() / 2;

    }
}

class ContractorEmployee implements calculateMonthlySalary
{

    public function calculateSalary(Employee $employee)
    {

        return $employee->getSalary() * 1.2;

    }
}
