<?php
//program for using scope resolution operator
class base
{
   public $name;

   function baseclass()
   {
    $name='aman';
      echo"this is base class:".$name;
        echo"<br>";
          return $name;
   }
}
class derived extends base //create subclass
{
   public $nme;

   function derivedclass()
   {
   	base::baseclass();//base class fuction scope in derived class
   	$nme='aman';
      echo"this is derived class:".$nme;
        echo"<br>";
          return $nme;
   }
}

   $obj=new derived();//create object
    $obj->derivedclass();
     $obj->baseclass();
       base::baseclass();//access base class fuction without object
    

?>