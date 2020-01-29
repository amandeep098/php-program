<?php

   $num = array(100,200,300);
   echo $num[0] . ", " . $num[1] . " and " . $num[2] . "<br>";//array represent location wise

        $num = array(100,200,300); // num variable contain array values
         $arrlength = count($num); //find number of element in an array

            for($x = 0; $x < $arrlength; $x++) 
            {
             echo $num[$x];
             echo "<br>";
            }

//Associative array

        $age = array("aman"=>"22", "Abhay"=>"23", "John"=>"43");//some values represent their corresponding value

            foreach($age as $x => $x_value) 
            {
             echo $x . "=" . $x_value;
             echo "<br>";
            }

//multidimenstional array 
        $number = array    //array inside array    
        (
            array(1,2,3),   //first location contain another array
            array(4,5,6),
            array(7,8,9)
        );
    
             for ($row = 0; $row < 3; $row++) //for row
            {
                 for ($col = 0; $col < 3; $col++) //for column
                {
                 echo $number[$row][$col];//print value
                }
              echo "<br>";
            }
?>