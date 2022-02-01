<?php


namespace App\classes;


class Calculator
{
    public    $firstNumber  = 10;
    protected $secondNumber = 20;
    private   $operator     = 30;
    public    $result;

    public function index() {
        echo $this->firstNumber;
        echo $this->secondNumber;
        echo $this->operator;

    }

    protected function one() {
        echo 'In One';
    }

    private function two () {
        echo 'In Two';
    }

}