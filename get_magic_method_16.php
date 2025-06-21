<?php
// type of one.............
// class check_get_magic_method
// {
//   private $name = "sandhay Rajawat";
//   public function __get($name)
//   {
//     echo "<p style='color:red;text-align:center;padding-top:100px;font-size:30px'>I'm sorry but your are wrong way Please check again😔⚠️</p>";
//   }
// }
// $obj = new check_get_magic_method();
// $obj->name;

// type of method 2..........
// when we are acces the data in the array form................
class arry_access{
  public $data=['name'=>'sandhya',
  'age'=>12,'phone'=>9928832444];
  public function __get($key)
  {
    if(array_key_exists($key,$this->data)){

     
   echo $this->data['age'];
   echo "<br>";
   echo $this->data['name'];
   echo "<br>";
   echo $this->data['phone'];


    }else{
       echo "<p style='color:red;text-align:center;padding-top:100px;font-size:30px'>I'm sorry but your are wrong way Please check again😔⚠️</p>";
    
    }
  }

}
$obj=new arry_access();
$obj->age;
// $obj->name;
// $obj->lastname;