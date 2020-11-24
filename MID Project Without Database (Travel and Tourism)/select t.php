<?php

     

    if(isset($_POST['submit'])){

        $username=$_POST['username'];
        $password=$_POST['password'];
        $ticket=$_POST['ticket'];

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
       
        if($_POST['ticket']==''){
            echo '<h1 style="color:green;text-align:center">Ticket name must be fillup</h1>';
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
    <title>Ticket Select php</title>
    <link rel="stylesheet"href="select.css">
</head>
<body>
    <form action="deletet.php" method="post" enctype="multipart/form-data">
        <fieldset class="fi">
            <legend class="li">Select your Ticket</legend>
            

              Username:
              <input type="text" name="username">
              <br><br>
              Password:
              <input type="password"name="password">
              <br><br>
              Ticket:
              <select name="ticket">
                <option value="">---------</option>
                <option value="bus">Bus Ticket</option>
                <option value="train">Train Ticket</option>
                <option value="hotel">Hotel Ticket</option>





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