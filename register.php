<?php
$error=NULL;
if(isset($_POST['submit'])){
$psd1=$_POST['psd1'];
$psd2=$_POST['psd2'];
if($psd2!=$psd1){
$error="Paswords do not match!";
}else{
$link = mysqli_connect("localhost", "root", "", "myDB");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$name = mysqli_real_escape_string($link, $_POST['name']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$pass = mysqli_real_escape_string($link, $_POST['psd1']);

$sql = "INSERT INTO source (NAME, EMAIL, PASSWORD) 
VALUES ('$name', '$email', '$pass')";
if(mysqli_query($link, $sql)){
    $error="Registered Successfully";
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
.bg-img {
  background-image: url("red.jpg");

  min-height: 380px;
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.c {
  position: absolute;
  left: 500px;
  margin: 20px;
  border-style: solid;
  border-color:black ; 
  max-width: 450px;
  padding: 16px;
 background-color: white;
}

input[type=text], input[type=password],input[type=email] {
  width: 100%;
  padding: 13px;
  margin: 5px 0 22px 0;
  border: 1px;
  border-style:solid;
 
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus,input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}
.b {
  background-color: green;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.b:hover {
  opacity: 10;
}
</style>
</head>
<body>

<div class="bg-img">
  <form action="" method="post" class="c">
    <h1>Register here</h1>
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" placeholder="Enter Email" name="email" required>
    <input type="text" placeholder="Mobile Number" name="phone" required>
    <input type="password" name="psd1" placeholder="Password"  required>
    <input type="password" name="psd2" placeholder="Confirm Password" required>    
    <button type="submit" class="b" name="submit" >Register</button>
    <center><br><br> Already member?  <a href="login.php">Login here</a></center>  
    <center><p style="color:red"> <?php if(isset($_POST['submit']))
    { echo $error; } ?></p></center> 
</form>
</div><center>
</body>
</html>

