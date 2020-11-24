
<?php

if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $package=$_POST['package'];


        if(empty($_POST['username'])){
            echo  '<h1 style="color: green; text-align: center"><b>
                     please fillup your username!</b>
            </h1>';
        }
        elseif(empty($_POST['password'])){
            echo '<h1 style="color: green; text-align: center"><b>
             Password must be fillup!</b>
   </h1>';
        }
       
        if($_POST['package']==''){
            echo '<h1 style="color:green;text-align:center">Package name must be fillup</h1>';
        }
      
        else{
            
            echo " Hello ".$username;
            echo "<br>";
            echo " Your Package is for ".$package;
            echo "<br>";
            echo "<br>";
            echo '<a href="mp.php"><button type="button">Go to Delete</button></a>';
            

        }
    }




?>




















<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Package in Php</title>
</head>
<body>
 
    
</body>
</html>