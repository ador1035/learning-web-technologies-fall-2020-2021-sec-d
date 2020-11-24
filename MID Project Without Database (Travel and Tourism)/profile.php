<?php

session_start();


if(isset($_SESSION['CurrentUser'])){

    echo "Welcome".$_SESSION['CurrentUser']."This is your profile";
    echo "<br>";
    echo "<br>";
    echo "<a href='select t.php'text-decoration:'none'><h1 style='color:green;'>Ticket select</h1></a>";
    echo "<a href='select pack.php'text-decoration:'none'><h1 style='color:green;'>Package select</h1></a>";
    echo "<a href='selectac.php'text-decoration:'none'><h1 style='color:green;'>Accomodation select</h1></a>";

}

else{
    echo "you must be logged in";
}






?>
