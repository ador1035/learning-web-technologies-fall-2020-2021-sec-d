

       






<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package Select php</title>
    <link rel="stylesheet"href="select.css">
</head>
<body>
    
    <form action="deletep.php" method="post" enctype="multipart/form-data">
        <fieldset class="fi">
            <legend class="li">Select your Package</legend>
            

              Username:
              <input type="text" name="username">
              <br><br>
              Password:
              <input type="password"name="password">
              <br><br>
              Package:
              <select name="package">
                <option value="">---------</option>
                <option value="small">Small Package</option>
                <option value="low">Low Ticket</option>
                <option value="high">High Ticket</option>





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