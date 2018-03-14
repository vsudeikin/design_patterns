<?php
namespace Composite;

class Organization
{
    protected $employees;

    public function addEmployee($employee)
    {
        $this->employees[] = $employee;
    }

    public function getNetSalaries()
    {
        $netSalary = 0;

        foreach ($this->employees as $employee) {
            $netSalary += $employee->getSalary();
        }

        return $netSalary;
    }
}