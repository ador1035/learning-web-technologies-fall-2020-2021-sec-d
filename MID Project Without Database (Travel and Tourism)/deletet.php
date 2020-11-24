
<?php

if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $ticket=$_POST['ticket'];


        echo " Hello ".$username;
        echo "<br>";
        echo " Your ticket is for ".$ticket;
        echo "<br>";
        echo "<br>";
}







?>
















<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Package in Php</title>
</head>
<body>
    <a href="mp.php">
   <button type="button">Delete Package</button>
</a>
    
</body>
</html>