<?php
// interface....when one single class can be access(inherited) multiple interface class its called interface..
#...interface define only interface keyword  we dont used the class keyword
// dont need for the access modifiy ....
// we are define  function but used in the class .............

interface A{
  function hello();
}
interface C{
  function namste();
}
class B implements A,C{
  function hello(){
    echo "This is interface A\n used this method inside the class B";
    echo "<br>";

  }
  function namste(){
    echo "this is interface C\n used this method inside the class B";
  }
}
$obj=new B();
$obj->hello();
$obj->namste();



?>