<?php
$error=NULL;
if(isset($_POST['submit'])){
$psd1=$_POST['psd1'];
$psd2=$_POST['psd2'];
if($psd2!=$psd1){
$error="Paswords do not match!";
}else{
$link = mysqli_connect("localhost", "root", "12345", "myDB");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$first_name = mysqli_real_escape_string($link, $_POST['fname']);
$last_name = mysqli_real_escape_string($link, $_POST['lname']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$pass = mysqli_real_escape_string($link, $_POST['psd1']);
$gen=$_POST['gender'];

$sql = "INSERT INTO register(FIRST_NAME, LAST_NAME, EMAIL, PASSWORD, GENDER) VALUES ('$first_name', '$last_name', '$email', '$pass', '$gen')";
if(mysqli_query($link, $sql)){
    ?><script> alert("Successfully Registered!");</script><?php
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
}
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.container {
  position: absolute;
  left: 500px;
  margin: 20px;
  border-radius:0px;
  border-style: solid;
  border-color:black ;
  padding: 16px;
 background-color: white
}
</style>
</head>
<body>
  <form action="" method="post" class="container">
    <h1>Register here</h1>
    <center><input type="text" name="fname" placeholder="First Name" required><br>
   <br> <input type="text" name="lname" placeholder="Last Name" required><br>
    <br><input type="email" placeholder="Enter Email" name="email" required><br>
    <br><input type="password" name="psd1" placeholder="Password" required><br>
    <br><input type="password" name="psd2" placeholder="Confirm Password" required><br>
    <br><input type="radio" name="gender" value="female" required>Female
    <input type="radio" name="gender" value="male" required>Male
    <input type="radio" name="gender" value="others" required>Others<br><br>
   </center><center> <button type="submit" name="submit" >Register</button></center>
    <center><p style="color:red"> <?php if(isset($_POST['submit']))
    { echo $error; } ?></p></center>
</form>
<center>
</body>
</html>


