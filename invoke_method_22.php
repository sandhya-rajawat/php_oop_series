<?php
class invoke_method{
  public $a;
  public $b;
  public function __construct($a,$b){
$this->a=$a;
$this->b=$b;
  }
  public function sum(){
    echo $this->a+$this->b;
  }
  public function __invoke()
  {
      echo $this->a+$this->b;
    
  }
 
}
$obj=new invoke_method(20,30);
// $obj->sum();
$obj();


?>