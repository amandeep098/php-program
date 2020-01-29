<?php

 //while loop
  echo"while loop"."<br>";
  $x = 1;

    while($x <= 3) //first check condition then execute instruction
    {
      echo "The number is: $x". "<br>";
      $x++;
    }
 //do- while loop
   echo"do while loop"."<br>";
   $x = 1;

        do  //first execute the instruction then after check condition
        {
          echo "The number is: $x". "<br>";
           $x++;
        } while ($x <= 3);//check condition


 //for loop
    echo"for loop","<br>";
            for ($x = 0; $x <= 5; $x++) //loop start from inilization and execute instruction till condition is true 
            {                                               //increment and decrement according condition
                echo "The number is: $x "."<br>";
            }


 //foreach loop
    echo"foreach loop","<br>";
     $number = array(1,2,3,4,5);

    foreach ($number as $value) //loop work untill last element or value can be accur
    {
      echo "$value". "<br>";
    }


?>