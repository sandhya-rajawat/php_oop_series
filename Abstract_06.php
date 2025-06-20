<?php

abstract class new_abstract{
  public $name="sandhya";
  public function test(){
    return $this->name;
  }
  abstract  public function pendding($a,$b);
}
class child_new_abstract extends new_abstract{
 public function pendding($a,$b){
  return "add sub value of these :=".$a+$b;
}
}
$obj=new child_new_abstract();
echo $obj->pendding(10,20);





?>