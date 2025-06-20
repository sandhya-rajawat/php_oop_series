<?php
class abc{
  public function  __construct(){
echo " heyy!! Im Construct";
echo "<br>";
  }
  public function  __destruct()
  {
    echo " heyy!! Im destruct ";
    echo "<br>";
  }
  public function hello(){
    echo "heyy!! i'm deffrent  but im happy!!";
    echo "<br>";
  }
 
}
$obj=new abc();
$obj->hello();
// __construct,,,,,,,,,,__destruct this is used for  line when we are used mysqli_connect()
// and mysqli_close()


?>