<?php
// public
// protected
// private

/* public := this can be access anywhere inside the class and outside the class and the same inside the child class*/

// class Example{
//   public $name="sandhya";
//   public function check(){
//     echo "really this is your name!!".$this->name;
//   }
// }
// $obj=new Example();
// $obj->check();
// echo "<br>";
// echo $obj->name;

// // protected class
// class my_protect{
// protected $message="this is your protectes";
// public function fun_protec(){
//   echo "this is protected function:=".$this->message;
//   echo "<br>";
// }
// }
// // $obj=new my_protect();
// // $obj->fun_protec();

// class my_child_protect extends my_protect{
//   public function info(){
//     echo "this is run fast child protected";
//   }
// }
// $obj=new my_child_protect();
// $obj->fun_protec();
// $obj->info();


// private class..................

class my_private{
  private $name;
  public function test($n){
    echo $this->name=$n;

  }
}
// $obj=new my_private();

class child_private extends my_private{
  public function info(){
    echo "your name is good";
    echo "<br>";
  }
}
$obj=new child_private();
$obj->info();
$obj->test('sandhya');
// echo $obj->name;



?>