<?php
namespace Composite;
use Composite\EmployeeInterface as Employee;

class Developer implements Employee
{
    protected $salary;
    protected $name;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function getRoles()
    {
        
    }
}