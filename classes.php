<?php
    class info
   {
    public $name;

     function getdata($name)
    {
    	$this->nme=$name;
    }
     function showdata()
    {
    	return $this->nme;
    }

}
   $obj=new info();
   $obj->getdata('amandeep');
   echo"name is:".$obj->showdata();

?>