<!DOCTYPE HTML>  
<html>
<head>
    <title>Registion page</title>
    <link rel="stylesheet" type="text/css" href="css/w3css.css">
<style>
.error {color: #FF0000;}

.custompad{
                padding-left:450px;
                padding-right:450px;
                padding-top: 120px;
                border: 1px;
}

.align{
    align-content: center;
}
body {
    background-image: url("images/ElGbf4T.jpg");
    
}


</style>
</head>
<body background-img="images/ElGbf4T"> 
    <?php
  $_name="";
   $_username="";
   $_password="";
   $_gender="";
   $_mobile="";
?>



<div class=" custompad">
  <form class="w3-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    <div class="w3-section">
        <label><b> Name:</b></label>
          <input class="w3-input w3-border w3-margin-bottom" palaceholder="enter username" type="text" name="name" value="<?php echo $_name;?>" required>  
          <span class="error"> </span>
          <br>
          <label><b> Username:</b>  </label> 
         <input class="w3-input w3-border w3-margin-bottom" type="text" value="<?php echo $_username;?>"name="username" >  
         <span class="error"> </span>
         <br>
      <label><b>  Password:  </b>  </label> 
   <input class="w3-input w3-border w3-margin-bottom" type="password" name="password" >  
   <span class="error"> </span>
   <br>
 
   <label><b>    Gender:</b>  </label> 
      <input class="w3-radio" type="radio" name="gender"  value="female">Female
          <input class="w3-radio w3-margin-bottom" type="radio" name="gender" value="male"  >Male
          <span class="error"></span>
          <br>
  
    <label><b>   Mobile no:</b>  </label>  
      <input class="w3-input w3-border w3-margin-bottom" type="text" name="mobile" value="<?php echo $_mobile;?>" >
      <span class="error"></span>
      <br>
      
      <label><b>Address</b></label>
      <textarea cols="4" rows="4" class="w3-input w3-border w3-margin-bottom"></textarea>
  
      <button class="w3-btn w3-blue">Submit</button> 
      <button onclick="myFunction()" class="w3-btn w3-blue">Back</button> 
      <script>
          function myFunction(){
              window.open("index.php","_self");
          }
          </script>
    
</form>
</table>
    
</div>
        <?php
if(isset($_POST['name'])&&isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['gender'])&&isset($_POST['mobile'])){

   $_name=$_POST['name'];
   $_username=$_POST['username'];
   $_password=$_POST['password'];
   $_gender=$_POST['gender'];
   $_mobile=$_POST['mobile'];

  if(!empty($_POST['name'])&&!empty($_POST['username'])&&!empty($_POST['password'])&&!empty($_POST['gender'])&&!empty($_POST['mobile']))
  {
    $servername = "localhost";
    $user = "root";
    $password1 = "";
     $dbname = "testdb";

       $conn = new mysqli($servername, $user, $password1, $dbname);

          $query="SELECT id from customer_info  where Username='$_username' AND Password='$_password'";
      
             if($conn->query($query)==TRUE)
             { echo 'hello';
                 $result=$conn->query($query);
                 if ($result->num_rows > 1)
                 {
                     echo "This username is already registerd";
                 }
                  else {
                $sql = "INSERT INTO customer_info (name, username,password,Gender,Mobile_Number)
                 VALUES ('$_name', '$_username', '$_password','$_gender','$_mobile')";

               if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }

            $conn->close();
            }
             }
  } 
            else  {
   echo "please fill all the details";    
  }
  }

?>


</body>
</html>

