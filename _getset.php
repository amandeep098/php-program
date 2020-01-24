<?php 

class employee
{

    function __set($p,$v)//initialy write value to undeclare varable
    {
      $this->p= $v;
       
    }

    function __get($p)//read the value of undeclare variable
    {
     echo"The marks of student  is " . $this->p ;
    }

}

$obj= new employee();

$obj->name= 'Aman';

echo $obj->name;

?>