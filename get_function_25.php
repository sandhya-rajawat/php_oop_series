<?php

// type of one get function................
// 1.get_class()...............

// class get_class_method{
//   public function hello(){
//     echo "this is your class=><br> ".get_class($this);
//     echo "<br>";
//   }
// }
// $obj=new get_class_method();
// $obj->hello();
// echo (get_class($obj));

// 2.get_parent_class().....................................;

// class abc{
//   public function __construct()
//   {
//     echo "this is parent <br>";
//   }
// }
// class child_class extends abc{
//   public function __construct()
//   {
//    echo parent::__construct();
//    echo "<br>";
//     echo "this is child class<br>".get_parent_class($this);
//    }
// }
// $obj=new child_class();
// echo get_parent_class($obj)


// 3.get_class_methods->its return array

// class abc{
//   public function A(){
//     echo "heyy A<br>";
//   }
//   public function B(){
//     echo "heyy B<br>";
//   }
//   public function C(){
//     echo "heyy C<br>";
//   }
 
// }
// $class_methods=get_class_methods('abc');

// print_r($class_methods);
// echo implode($class_methods);
// echo gettype($class_methods)


// 4. get_class_vars()..............
// class abc{
//   private $name='Sandya';
//   public $age=23;
//   public $city='Jaipur';
//   protected $lastname='Rajawat'; 
// function test(){
//      $class_varr=get_class_vars(get_class($this));
//   print_r($class_varr);
// }
// }
//  $obj=new abc();
//  $obj->test();
//  $class_vars=get_class_vars(get_class($obj));
// print_r($class_vars);

// 5.  get_object_vars();
// class abc{
//   private $name='Sandya';
//   public $age=23;
//   protected $lastname='Rajawat'; 
// function __construct()
// {
// $this->name;
// $this->age;

//  $class_object=get_object_vars($this);
//  print_r($class_object);
// }
// }
//  $obj=new abc();



?>