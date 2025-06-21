<?php
// unset property destroyed the property;;
class unset_method {
  public $name = 'sandhya';
  private $message = 'hope and luck its can run!!';

  public function test() {
    echo $this->name . "<br>";
    echo $this->message . "<br>";
  }
}

$obj = new unset_method();
$obj->test();

unset($obj->name);
echo ($obj->name);
// its not word................................

?>