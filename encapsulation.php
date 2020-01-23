<?php
    class math
   {
    public $a;
     public $b;

     function add($a,$b)
    {
    	$res=$a+$b;
      echo"addition is".$res;
      echo"<br>";
      return $res;
      
    }
    function multi($a,$b)
    {
      $res=$a*$b;
      echo"multipication is".$res;
      return $res;
      echo"<br>";
    }
}
$obj=new math();
$obj->add('4','6');
$obj->multi('4','6');

?>