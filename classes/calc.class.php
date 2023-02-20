<?php  

class Calc{
  public $operator;
  public $num1;
  public $num2;

  // TODO:: CONSTRUCTOR OF PHP
  public function __construct(string $operator,int $num1,int $num2 ){
    $this->num1=$num1;
    $this->num2 = $num2;
    $this->operator = $operator;
  }

  // TODO:: CALCULATION FUNCTION

  public function calculator(){
    switch($this->operator){
      case "add":
        $result = $this->num1+$this->num2;
        return $result;
        break;
      case 'subtraction':
        $result = $this->num1 - $this->num2;
        return $result;
        break;
      case "multiplication":
        $result = $this->num1 * $this->num2;
        return $result;
        break;
      case "division":
        $result = $this->num1/$this->num2;
        return $result;
        break;
      default:
        break;
    }
  }

}

?>