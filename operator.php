
<?php
//Arithmetic operators
    echo"Arithmetic operators"."<br>";
   $x = 50;  
   $y = 20;

   echo $x + $y ."<br>";//addition of number
     echo $x - $y ."<br>";//subtraction of numbers
         echo $x/$y ."<br>";//divide the number
             echo $x*$y ."<br>";//multiply the number


//increment\decrement operators
    echo"increment\decrement operators"."<br>";
    $x = 10;  
      echo ++$x ."<br>";//firest increment value then print
     $x = 10; 
        echo $x++ ."<br>";//first print value after that increment value
      $x = 10; 
           echo --$x ."<br>";
        $x = 10; 
             echo $x-- ."<br>";

//Assignment operators
    echo"Assignment operator"."<br>";
     $x = 10;
     $y = 60;

         echo $x ."<br>";
      $x=$y;            //value of y store into x
         echo $x ."<br>";

//comparison operators
     echo"comparison operator"."<br>";
     $x = 50;  
     $y = 50;

     echo var_dump($x == $y)."<br>"; //it describe data type of varable
      echo  var_dump($x === $y)."<br>"; 


//logical operator
     echo"logical operator"."<br>";
   $x = 100;  
   $y = 50;

         if ($x == 100 or $y == 80) //OR operator
         {
            echo "Yes"."<br>";//if minimum one condition is true print YES
         }
         else
         	echo "No"."<br>";//if both condition is false print NO

            if ($x == 10 and $y == 5)//AND operator
            {
                echo "Yes"."<br>";//if minimum one condition is true print YES
            }
            else
         	   echo "No"."<br>";//if both condition is false print NO


                    if ($x == 100 xor $y == 50) //XOR operator
                    {
                       echo "Yes"."<br>";//if one condition is true then it is true
                    }
                    else
         	           echo "No"."<br>";//if both condition is true then it is false
       	           
?>                    