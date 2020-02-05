<html>
    <body>
        <form method="post"><!--use post method to access data on server-->
        <label>Name</label>
           <input type="text" name="name"></br>
            <label>Age</label>
             <input type="text" name="age"></br>
               <input type="submit" name="submit"></br>
         </form>

<?php
     if(isset($_POST))//$_POST variable have access value which submit by using form 
    {
 	$name=$_POST['name'];
 	$age=$_POST['age'];
 	echo $name."<br>".$age;
    }
?>
     </body>
</html>