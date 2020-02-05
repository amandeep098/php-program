<?php
    echo "basic date and time function<br>";

    echo date("y/m/d")."<br>";//define current date 
        echo date("H:i:s")."<br>";//define current time 

    //function related time
            echo date("a")."<br>";//time is am r pm
                echo date("r")."<br>";//show full date time
                     echo date("h")."<br>";//describe hour in 12 hours limit
                         echo date("i")."<br>";//describe min

   //fuction related day                    
            echo date("D")."<br>";//describe name of curent day
                echo date("j")."<br>";//describe day of month

    //function related month       
            echo date("M")."<br>";//describe name of month
                echo date("t")."<br>";//describe  no. of day in a month

    //function related year
            echo date("L")."<br>"; //check leap year if yes print 1 otherwise 0  
                echo date("Y")."<br>";//describe year

    //some other function
 
                $date=date_create("2013-03-23");//create date
                 echo $date=date_format($date,"y/d/m")."<br>";//select format which date can be show
     
                    $d=date_create("2020-02-04");
                     date_add($d,date_interval_create_from_date_string("20 days,3 month"));//add time in date 
                      echo date_format($d,"d-m-y")."<br>";

                      $da=date_create("04-feb-2020");
                      date_date_set($da,2020,01,23);//set the specific date
                    echo date_format($da,"y-m-d")."<br>";
                   
                echo date_default_timezone_get()."<br>";//define the timezone of a current date and time  
       

?>