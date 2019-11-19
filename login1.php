<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/W3css.css">
        <style>
            .style1{
                padding-left:450px;
                padding-right:450px;
                padding-top: 20px;
                border: 1px;
            }
            .center{
                align-content: center;
            }
        </style>
    </head>
    <body>
       
        
        
        
        <div class= "style1">
         <img  src="images/user-2-f.jpg" alt="Avatar" style="width:90%" class="w3-circle w3-margin-top center">
     <form class="w3-container" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required>
          <button class="w3-btn-block w3-green w3-section w3-padding" type="submit">Login</button>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small w3-btn w3-red"><a href="index.php">Back to home page</a></span>
      </div>

    </div>
  </body>

 <?php
 session_start();
 
  if(isset($_POST['username'])&&isset($_POST['password']))
     {
       $username=$_POST['username'];
       $password=$_POST['password'];
       $_SESSION['myValue']=$_POST['username'];
       
       
       if(!empty($username)&&!empty($password))
          {   
           $servername = "localhost";
           $user = "root";
           $password1 = "";
           $dbname = "testdb";
           $conn = new mysqli($servername, $user, $password1, $dbname);
            $query="SELECT Username,Password FROM customer_info  where Username='$username' AND Password='$password'";
            
            if($conn->query($query)==TRUE)
               {
                $result=$conn->query($query);
                 if ($result->num_rows ==1)
                
                 {
                 echo  "login sucessfull";
                 header("Location:index.php");
                    exit();
                                         }
                else {
                   echo "invalid username and password";
                    }
                  
               }
            else {
              echo "querry fialed";    
                }
           }
       else{
           echo "php read"; 
       }  
    }
     
  ?> 


</html>
   
