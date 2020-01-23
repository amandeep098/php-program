<?php
  class employee
  {
  public $name;
function __construct($name)
    {
    echo"name  is:".$name;
    	echo"<br>";
     }
  function __destruct()
     {
      echo"destructor is apply".$name;
     }
  }

   $obj=new employee('alex');
?>