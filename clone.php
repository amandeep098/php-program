<?php
 class employe
 {
    public $name;
 }

  $e = new employe();//create object
  $e->name = 'Aman';

  $e2 = clone $e;//create copy of object
  $e2->name = 'Raman';

  echo $e->name."<br>";
  echo $e2->name;


?>