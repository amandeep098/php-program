<html>
<head>polymorphism<br></head>
<body>
	<?php

class base
{
	function add($a,$b)
	{
     $res=$a*$b;
     echo"multipication  is:".$res;
     echo"<br>";
	}
}
	class derived extends base
	{
      function add($a,$b)
      {
      	 $res=$a+$b;
      	echo"Addition is:".$res;
      }
	}

	$b=new derived();
	//$c=new base();
	//$c->add(10,20);

     $b->add(10,20);

	?>
</body>
   </html>