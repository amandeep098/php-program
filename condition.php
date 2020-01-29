<?php

 $a=50;

  //if statement
  echo"if statement"."<br>";
    if ($a < 100) 
    {
     echo "True"."<br>";//print if value is true
    } 

 //if.else statement
   echo"if..elseif statement"."<br>";
        if ($a < 100) 
        {
         echo "True"."<br>";//print if value is true
        }
             else
            {
               echo "False"."<br>";//print if value is false
            }

 //if..elseif statement
   echo"if..elseif statement"."<br>";
            if ($a < 10) 
            {
               echo "True"."<br>";//print if value is true
            }                     //if value is false then check another condition
                 elseif ($b < 100) 
                {
                  echo "Partially true"."<br>";//print if second condition is true
                }
                    else 
                    {
                    echo "False"."<br>";//rint if condition is false
                     }

 //switch statements
  echo"switch statements"."<br>";
    $day="M";//value which pass in switch statement
    switch ($day) //pass value or condition as parameter
    {
        case "M"://case 1
        echo "Monday";
        break;
        case "T"://case 2
        echo "Tuesday";
        break;
        case "W"://case 2
        echo "Wednesday";
        break;
        default:// if no case is match with condition then this default case is work
        echo "error";
    }                  
?>