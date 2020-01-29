<?php
    $a="100";//every thing in double quotes is string
    echo $a."<br>";
    $b='hello'; // this is also a string
    echo '$b'."<br>";//special character can't be process in single quotes
    echo "$b"."<br>";//special character can be process in double quotes

 $s='good morning';
 echo $s."<br>";

   $l=strlen($s);//find the length of string
     echo $l."<br>";

         $c=str_word_count('hello');//count the word in given string
          echo $c."<br>";

 
             $r=strrev($s);//reverse the string 
              echo $r."<br>";


           $p=strpos(' good morning','morning');//find the postion with first matching character
           echo $p."<br>";


       $rep=str_replace('morning','evening', 'good morning');//relace the one string with another
       echo $rep."<br>";

     $cmp=strcmp('hello','hell');//compare  the two string
     echo $cmp."<br>";

?>