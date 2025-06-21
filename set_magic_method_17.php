<?php
// type 1...........................................
// class set_magic_method{
//   private $name;
//   function __get($name)
//   {
//      echo "<p style='color:red;text-align:center;padding-top:100px;font-size:30px'>I'm sorry but your are wrong way Please check again😔⚠️</p>";
//   }
//   function __set($name, $value)
//   {
//     echo "<p style='color:red;text-align:center;padding-top:100px;font-size:30px'>This is not a valid syntax your variavle value assign😔⚠️";
//   }

// }
// $obj=new set_magic_method();
// $obj->name="sandhya rajawat";

// method number 2.......................................
class set_magic_method{
  private $name;
  function __get($name)
  {
     echo "<p style='color:red;text-align:center;padding-top:100px;font-size:30px'>I'm sorry but your are wrong way Please check again😔⚠️</p>";
  }
 
  function __set($name, $value){
if(property_exists($this,$name)){
 echo $this->$name=$value;
}
   else{
    echo "<p style='color:red;text-align:center;padding-top:100px;font-size:30px'> This is not a valid syntax your variavle value assign😔⚠️";
  }
}

 

}
$obj=new set_magic_method();
$obj->name="sandhya rajawat";

?>