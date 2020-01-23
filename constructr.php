<?php
  class student
  {
    public $name;
      public $age;
   function __construct($name)
    {
    	echo"name of student is:".$name;
    	echo"<br>";
    }
   function info($age)

    {
     echo"the age of student is:".$age;
       echo"<br>";

    }

   }

   $obj=new student('aman');
     $obj->info('23');
?>