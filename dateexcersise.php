<?php
    echo "todays date is:".date("d/m/y")."<br>";//show current date

        echo "real timestamp is:". time()."<br>";//show real timestamp

            echo  "real date and time:".date("y-m-d h:i:s",time())."<br>";//convert timestamp into date

                echo "current date timestamp:".strtotime(date("y-m-d"))."<br>";//convert date into timestamp


                   $date=date_create("2020-06-19 13:44:02");        //conversion in date pattern
                   echo date_format($date,"d/m/y g:i:s a")."<br>"; 
   

                   $date1=date_create("2020-06-19 13:44:02");
                  $date2=date_create("2020-10-13 23:04:22");
                 $diff=date_diff($date1,$date2);//find difference between date and time
                echo $diff->format("%y-%m-%d %h:%i:%s ")."<br>";
           

             $d=strtotime("now"."+1 month");//convert today date into timestamp and add one month
            echo date("y-m-d H:i:s",$d)."<br>";//show date according given pattern
    
         $date=strtotime("now"."+2 month");//convert today date into timestamp and add one month
        echo date("y-m-d",$date)."<br>"; 

             
?>