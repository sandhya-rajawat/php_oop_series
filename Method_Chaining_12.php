<?php
// Method_Chaining........
class Header_of_the_method
{
  public function A()
  {
    echo "Hello A";
    echo "<br>";
    return $this;
  }
  public function B()
  {
    echo "Hello B";
    echo "<br>";
    return $this;
  }
  public function C()
  {
    echo "Hello C";
    echo "<br>";
  }
}
$obj = new Header_of_the_method;
$obj->A()->B()->C();
