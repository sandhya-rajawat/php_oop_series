<?php
// class method_overring{
//   public $message="this is parent class and used the method first";
//   public function test(){
//    return $this->message;
//   }
// }
// // $obj=new method_overring();
// //  echo $obj->test();
// class child_method_overring extends method_overring{
//   function test(){
//     echo "this is run and its also used the same method name for parent name but store diffrents values";
//     echo "<br>";
//   }
// }
// $obj=new child_method_overring();
// $obj->test();


// overring properties.......................
class overring_property{
 public $name="Sandhya Rajawat";
public function check(){
  return $this->name;
}
}
// $obj2=new overring_property();
// echo $obj2->check();
class child_overring_property{
   public $name="Priyanka Rajawat";
public function test(){
  return $this->name;
}
}
$obj2=new child_overring_property();
echo $obj2->test();


?>