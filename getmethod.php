<html>
    <body>
        <form method="get"><!--use get method to access data from server-->
            <label>Name</label>
               <input type="text" name="name"></br>
                 <label>Age</label>
               <input type="text" name="age"></br>
            <input type="submit" name="submit"></br>
        </form>
        <?php
            if(isset($_GET))//$_GET is variable which check weather canstore value or not
            {
 	         $name=$_GET['name'];
 	         $age=$_GET['age'];
 	           echo $name."<br>".$age;
            }
        ?>
    </body>
</html>