
<?php

if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $accomo=$_POST['accomo'];


        echo " Hello ".$username;
        echo "<br>";
        echo " Your Accomodation is for ".$accomo;
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
    <a href="md.php">
   <button type="button">Delete Accomodation</button>
</a>
    
</body>
</html>