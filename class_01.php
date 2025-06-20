<?php
class Calculation
{
public $a,$b,$c;
  function sum(){
    $this->c=$this->a+$this->b;
    echo $this->c;

  }

}
$obj=new Calculation();
$obj->a=20;
$obj->b=10;

$obj->sum();

?>