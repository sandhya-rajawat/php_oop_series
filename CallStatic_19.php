<?php
// callstatics
// class call_static{
//   private static $name="sandhya rajawat";
// static function test(){
//   return self::$name;
// }
// // }
// echo call_static::test();...................its run i dont run


// callstatics
class call_static{
private  static function hello(){
  echo "This is not run because private static used!!!!";
}
private static function __callStatic($method,$arg){
if(method_exists(__CLASS__,$method)){
  call_user_func_array([__CLASS__,$method],$arg);
}else{
  echo "<p style='color:red;text-align:center;padding-top:100px;font-size:30px'>I'm sorry but your are wrong way Please check again😔⚠️</p>";
}
}

}
call_static::hello();







?>