<?php
    class base 
    {
    	public $name;
        private $nme;
        public $namee;
   function getdata($n)
       {
       	$name=$n;
       	echo"name is:".$name;
       	echo"<br>";
       	echo "this is base class 1st fuction";
        echo"<br>";

       }
    private function showdata($N)
       {
        $nme=$N;
       echo"NAME IS:".$nme;
       echo"<br>";
       	echo "this is base class 2nd function";
       }
   protected function show($m)
       {
        $namee=$m;
        echo"<br>";
       echo"NAME is:".$namee;
       echo"<br>";
       	echo "this is base class another function";
       }


    }   
    $obj=new base();
      $obj->getdata('1 base class');
      $obj->showdata(' 2 BASE class');
       $obj->show(' 3 BASE class');

?>