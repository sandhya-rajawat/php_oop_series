<?php
// inheritance class.....
// first type.......................................
// class my_parent
// {
//   public $name;
//   public $city;
//   function __construct($name, $city)
//   {
//     $this->name = $name;
//     $this->city = $city;
//   }
//   function info()
//   {
//     echo " this is my parent class\n" . $this->name . "" . $this->city;
//     echo "<br>";
//   }
// }
// class child_parent extends my_parent
// {
//   function my_child()
//   {
//     echo "this is your child\n";
//     echo "<br>";
//   }
// }
// $obj = new child_parent('sandhya', 'jaipur');
// $obj->info();
// $obj->my_child();

// second type.............................
// class my_parent
// {
//   public $name = "manu";
//   public $city = "ajmer";
//   function info()
//   {
//     echo " This is parent \n" . $this->name . " " . $this->city;
//     echo "<br>";
//   }
// }
// class child_parent extends my_parent
// {
//   public $child_name;
//   public $child_city;
//   function __construct($n, $c)
//   {
//     $this->child_name = $n;
//     $this->child_city = $c;
//   }
//   function test()
//   {
//     echo "this is  child\n" . $this->child_name . " " . $this->child_city;
//     echo "<br>";
//   }
// }
// $obj = new child_parent('sandhya', 'jaipur');
// $obj->test();
// $obj->info();
