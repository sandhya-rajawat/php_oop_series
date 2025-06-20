<?php
include './namespace_first.php';
include './namespace_second.php';
$obj1= new first_file\Check();
$obj1->add(2,3);
echo "<br>";

$obj2=new second_file\check();
$obj2->sum(9,6);



?>