<?php

class Calc {

    public $num1;
    public $num2;
    public $operator;

    public function __construct($num1, $num2, $op) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operator = $op;
    }

    public function calcMethod() {
      switch ($this->operator) {
        case 'add':
            $result = $this->num1 + $this->num2;
            break;
        case 'sub':
            $result = $this->num1 - $this->num2;
            break;
        case 'mul':
            $result = $this->num1 * $this->num2;
            break;
		case 'div':
            $result = $this->num1 / $this->num2;
            break;
        case 'mod':
            $result = $this->num1 % $this->num2;
            break;
        case 'exp':
            $result = $this->num1 ** $this->num2;
            break;
        default:
            $result = "Error";
            break;
      }
      return $result;
    }
}
$num1 = 3;
$num2 = 2;
$operator = "exp";

$calculator = new Calc($num1, $num2, $operator);
echo "The result of $num1 $operator $num2 is ".$calculator->calcMethod();

