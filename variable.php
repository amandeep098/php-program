<?php
   $x=10;//global variables
   $y=20;//not use in inside local scope

    function add()
    {
      $x=2;//scope of variable is local 
      $y=1;//not be used outside the fuction scope
      echo $x+$y;//Answer is 3
    }

      add();//function call
        echo "<br>";
        echo $x+$y;//Answer is 30
     echo "<br>";

        while($x!=0)
        {
         static $x=3;//define static variable store last executable result
         echo $x;
         $x--;
        }


?>