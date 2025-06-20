<?php
class myminiconstructor{
 public $first_Name;
public $last_Name;
function __construct($firstname,$lastname)
{
  $this->first_Name=$firstname;
  $this->last_Name=$lastname;
  
}
function __tostring(){
  return $this->first_Name." ". $this->last_Name;
}
}
$check= $obj=new myminiconstructor('sandya','rajawat');
echo $check;



?>