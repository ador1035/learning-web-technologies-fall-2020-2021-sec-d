<?php
    if(isset($_REQUEST['submit'])){ 
     if(!empty($_REQUEST['name']) || !empty($_REQUEST['id']) || !empty($_REQUEST['password']) || !empty($_REQUEST['rad'])){
         if($_REQUEST['password'] == $_REQUEST['conpass']){            
             $myfile = fopen('data.txt', 'a');
             $data = $_REQUEST['rad']."::".$_REQUEST['password']."|".$_REQUEST['id']."|".$_REQUEST['name']."\n";
             fwrite($myfile, $data);
             fclose($myfile);   
         }
         
         else{             
             echo "Password does not match...";         
         }
         
     }     
     else{echo "all the files are needed ...";}   
 }
 ?>