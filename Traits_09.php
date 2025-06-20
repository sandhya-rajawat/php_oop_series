<?php
// traits........when we have multiple classes and we want used the same function so we can used the traits...with the  hepl of this we can save the time also...


trait example
{
  public function test()
  {
    echo "hello this is common used for the trait in the diffrent class";
    echo "<br>";
  }
}
class A
{
  use example;
  public function class_A()
  {
    echo "this is class one";
    echo "<br>";
  }
}
class B
{
  use example;
  public function class_B()
  {
    echo "this is class second";
      echo "<br>";
  }
}
class C
{
  use example;
  public function class_C()
  {
    echo "this is class third";
      echo "<br>";
  }
}
$obj=new A();
$obj->test();
$obj->class_A();

$obj2=new B();
$obj2->test();
$obj2->class_B();

$obj3=new C();
$obj3->test();
$obj3->class_C();