<?php

// autoload ............with the help of this we dont need again again used require or include ...........
//include classes/first.php
//include classes/second.php
function __autoload($class){
  require "classes".$class.".php";
}
$test=new first();
$test=new second();



?>