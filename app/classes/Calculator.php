<?php


namespace App\classes;
use App\classes\User;


class Calculator
{
    public    $firstNumber;
    protected $secondNumber;
    private   $operator;
    public    $result;

    public function __construct($data)
    {
//        echo is_array($data) ? 'Is Array' : 'Single Variable';

        $this->firstNumber  = 10;
        $this->secondNumber = 20;
        $this->operator     = '-';
    }

    public function index() {
        switch ($this->operator)
        {
            case '+' :
                echo $this->add();
                break;
            case '-' :
                echo $this->sub();
                break;
            case '/' :
                echo $this->division();
                break;
            case '*' :
                echo $this->multiplication();
                break;

            default:
                break;

        }
    }

    protected function add() {
        return $this->firstNumber + $this->secondNumber;
    }

    protected function sub () {
        return $this->firstNumber - $this->secondNumber;
    }
    protected function multiplication () {
        return $this->firstNumber * $this->secondNumber;
    }
    protected function division () {
        return $this->firstNumber / $this->secondNumber;
    }


}