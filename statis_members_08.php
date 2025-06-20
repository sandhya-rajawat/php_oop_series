<?php
// static members
// type 1......................

// class Static_members{
//   static function sum($a,$b){
//     echo "Add Two number:=".$a+$b;
//   }
// }

// Static_members::sum(2,3);

// type2...............................
// class Static_members{
//   static $name;
//   static function sum($name){
//  return self::$name=$name;
//   }
// }

// echo Static_members::sum("sandhya Boss");

// type 3.........................................

 class Static_members{

  static function sum($a,$b){
    return "add two number=:".$a+$b;
  }
}
class child_Static_members extends Static_members{
  static $name;
  static function test($name){
    echo self::$name=$name;
    echo "<br>";
  }
}

child_Static_members::test("sandhya lady boss");
echo child_Static_members::sum(20,20);

// late static binding.........................................................

?>