<?php

  //describe todays date
    echo "todays date is: ".date("d/m/y")."<br>";

    //describe  timestamp 
        echo "timestamp is: ". strtotime("2020-02-06")."<br>";
       
        //convert timestamp into date
            echo  "change timestamp into date: ".date("y-m-d h:i:s",time())."<br>";
            
        //convert date into timestamp
                echo "current date into timestamp: ".strtotime(date("y-m-d"))."<br>";

          //change the date format for given date
                   $date=date_create("2020-06-19 13:44:02");     
                   echo "date with new format: ".date_format($date,"d/m/y g:i:s a")."<br>";
   
        //describe difference between two dates
                   $date1=date_create("2020-06-19 13:44:02");
                  $date2=date_create("2020-10-13 23:04:22");
                 $diff=date_diff($date1,$date2);
                echo "difference b/w dates are: " .$diff->format("%y year %m month %d days %h:%i:%s ")."<br>";
           
        //convert date into timestamp and add one month
             $d=strtotime("now"."+1 month");
            echo "date after month from today: ".date("y-m-d",$d)."<br>";
    
        //convert date into timestamp and add one month
             $date=strtotime("now"."+2 month");
               echo  "date after  2 month from today: ".date("y-m-d",$date)."<br>"; 

             
?>