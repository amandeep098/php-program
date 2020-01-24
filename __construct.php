<?php
    class employe 
    {
     public $name;
     public $age;

    function __construct($name,$age) //constructor is created
     {

     	echo"this is constructor :"."<br>";
        echo $nme = $name;
         echo "<br>";
         echo $agge=$age;
     }
       
     function __destruct()//destructor is created

        {
          echo "<br>";
         echo "This is destructor:".$nme. $agge;
         }
}

$emp = new employe("aman","22");//create an object and constructor automatically initilize
?>