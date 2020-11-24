<?php

     

    if(isset($_POST['submit'])){

        $username=$_POST['username'];
        $password=$_POST['password'];
        $accomo=$_POST['accomo'];

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
       
        if($_POST['accomo']==''){
            echo '<h1 style="color:green;text-align:center">Accomodation name must be fillup</h1>';
        }
      
        else{
            echo   "";

        }
    }




?>














<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accomodation Select php</title>
    <link rel="stylesheet"href="select.css">
</head>
<body>
    <form action="deleteta.php" method="post" enctype="multipart/form-data">
        <fieldset class="fi">
            <legend class="li">Select your Accomodation</legend>
            

              Username:
              <input type="text" name="username">
              <br><br>
              Password:
              <input type="password"name="password">
              <br><br>
              Accomodation:
              <select name="accomo">
                <option value="">---------</option>
                <option value="cottage"> Cottage</option>
                <option value="Hotel">Hotel</option>
                <option value="Five star">Five star</option>





              </select>
              <br><br>
              <br><br>

              <div class="ar">

                    <input type="submit"name="submit" value="Select" class="se">
                    <button type="button"class="b"><a href="login.php">Back to Login page</a></button>





              </div>








            








        </fieldset>







    </form>
</body>
</html>