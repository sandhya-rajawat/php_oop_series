<?php
// isset its return value only true and false..........is check value have or not
// class isset_method{
//   public $Name="sandhya rajawat";
//   private $message=" how can run this property";
//   public function test(){
//     echo $this->Name;
//     echo "<br>";
//     echo $this->$message;
//   }
// }
// $obj=new isset_method();
// $obj->test();

// class isset_method{
//   public $name;
//   private $message;
//   public function test($name){
//   echo $this->name=$name;
//   echo "<br>";
//   // echo $this->$message=$message;
//   }
// }
// $obj=new isset_method();
//  $obj->name="sandhya";
// echo isset($obj->name);
// $obj->test("sandhya");






// class isset_method{
// private $name;
//   private $message;
//   public function test($name,$message){
//   echo $this->name=$name;
//   echo "<br>";
//   echo $this->$message=$message;
//   }
//   function __isset($property)
//   {
//     echo isset($this->$property);
//   }
// }
// $obj=new isset_method();
//  $obj->test('Sandhya Rajawat','Karma is back!!!!!!');
//  isset($obj->name);
//  isset($obj->message);



class isset_method {
    private $name;
    private $message;

    public function test($name, $message) {
       echo $this->name = $name;
    
  echo "<br>";
       echo $this->message = $message;
      
    }

    public function __isset($property) {
        echo isset($this->$property);
    }
}

$obj = new isset_method();
$obj->test('Sandhya Rajawat', 'Karma is back!!!!!!');

// These will call __isset() automatically
echo "<br>";  
isset($obj->name);
echo "<br>";
isset($obj->message);



?>