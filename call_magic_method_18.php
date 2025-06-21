<?php
// class call_magic_method{
//   private $name;
//   private function hello($name){
//      return $this->name=$name;
//   }
//   public function __call($method,$arg)
//   {
//      echo "<p style='color:red;text-align:center;padding-top:100px;font-size:30px'>I'm sorry but your are wrong way Please check again😔⚠️</p>";
//   }
// }
// $obj=new call_magic_method();
// echo $obj->hello("lady boss!!");


class call_magic_method{
  private $name;
  private function hello($name){
     return $this->name=$name;
  }
  public function __call($method,$arg)
  {
    if(method_exists($this,$method)){
call_user_func_array([$this,$method],$arg);
    }else{
       echo "<p style='color:red;text-align:center;padding-top:100px;font-size:30px'>I'm sorry but your are wrong way Please check again😔⚠️</p>";
    }
  }
}
$obj=new call_magic_method();
echo $obj->hello("lady boss!!");

  



?>