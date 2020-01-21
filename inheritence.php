<html>
<head>program on inheritance<br></head>
       <body>
<?php

  class car
  {
    public $name;
    function getinfo($name)
      {
       $this->nme=$name;
    }
    function showinfo()
    {
    	echo"name is :".$this->nme;
        echo"<br>";
    	return $this->nme;
    }
     

  }
    class color extends car
    {
    	public $color;
    	function getdata($color)
    	{
    		$this->clor=$color;
    	}
    	 function showdata()
    	 {

    	 	echo"color is:".$this->clor;
    	 	return $this->clor;
    	 }
    }

$a=new color();
$a->getinfo('ford');
$a->showinfo();
$a->getdata('white');
$a->showdata();

?>
         </body>
</html>