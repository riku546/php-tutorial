<?php

class EmployeesInfo
{
    public $name;
    public $postion;
    public $salary;

    public function __construct($name, $postion, $salary)
    {
        $this->name = $name;
        $this->postion = $postion;
        $this->salary = $salary;
    }
}

class Calc_salary
{
    public function calc_pay(stdClass $employee)
    {
        return $employee->salary * 1.1;
    }
}

class Database
{
    public function save_to_database(stdClass $employee)
    {
        // save to database
        echo "Saving " . $employee->name . "  to database";
    }
}


class Report{
  public function generate_report(stdClass $employee){
    // generate report
    echo "Generating report for " . $employee->name;
  }
}
