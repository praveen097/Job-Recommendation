<br><br><h1 style="color:blue"><center>
<?php
error_reporting(0);
session_start();
$mysqli=new mysqli('localhost','myuser','Iajneevarp321@','myDB');
$email=$_SESSION["email"];
$first=$mysqli->query("select NAME from source where EMAIL='$email'");
while($row = $first->fetch_assoc()){
        echo "Welcome ". $row['NAME'] . "!"."<br>";
}
?></h1>
<!DOCTYPE html>
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
  top:50px;
  margin: 20px;
  border-style:solid;
  border-color:black;
  max-width: 450px;
  padding: 16px;
  background-color: white;
}
input[type=email],select, input[type=password] {
  width: 25%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: 1px;
  border-style:solid;
  background: #f1f1f1;
}

input[type=email]:focus,select:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

.btn {
  background-color: blue;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 5;
}
</style>
</head>
<body>

 <center> <h2>Please select your skills here!</h2></center>

<center><form action="" method="post">
  <select id="skill1" name="skill1" required>
    <option value="">-Select-</option>
    <option value="aws">AWS/Azure</option>
    <option value="r">R</option>
    <option value="ielts">IELTS</option>
    <option value="msword">MS Word</option>
    <option value="msexcel">MS Excel</option>
    <option value="msaccess">MS Access</option>
    <option value="java">Java</option>
    <option value="html">HTML/CSS/PHP</option>
    <option value="adobephoto">Adobe Photoshop</option>
    <option value="adobeafter">Adobe After Effects</option>
    <option value="c">C/C++</option>
    <option value="quest">Quest</option>
    <option value="python">Python</option>
    <option value="mysql">MySql/Sql</option>
    <option value="linux">Linux/Red Hat</option>
    <option value="rapidminer">Rapid Miner</option>
    <option value="no">No Skills</option>
  </select>
  
  <select id="skill2" name="skill2" required>
    <option value="">-Select-</option>
    <option value="aws">AWS/Azure</option>
    <option value="r">R</option>
    <option value="ielts">IELTS</option>
    <option value="msword">MS Word</option>
    <option value="msexcel">MS Excel</option>
    <option value="msaccess">MS Access</option>
    <option value="java">Java</option>
    <option value="html">HTML/CSS/PHP</option>
    <option value="adobephoto">Adobe Photoshop</option>
    <option value="adobeafter">Adobe After Effects</option>
    <option value="c">C/C++</option>
    <option value="quest">Quest</option>
    <option value="python">Python</option>
    <option value="mysql">MySql/Sql</option>
    <option value="linux">Linux/Red Hat</option>
    <option value="rapidminer">Rapid Miner</option>
    <option value="no">No Skills</option>
    </select>
  
  <select id="skill3" name="skill3" required>
    <option value="">-Select-</option>
    <option value="aws">AWS/Azure</option>
    <option value="r">R</option>
    <option value="ielts">IELTS</option>
    <option value="msword">MS Word</option>
    <option value="msexcel">MS Excel</option>
    <option value="msaccess">MS Access</option>
    <option value="java">Java</option>
    <option value="html">HTML/CSS/PHP</option>
    <option value="adobephoto">Adobe Photoshop</option>
    <option value="adobeafter">Adobe After Effects</option>
    <option value="c">C/C++</option>
    <option value="quest">Quest</option>
    <option value="python">Python</option>
    <option value="mysql">MySql/Sql</option>
    <option value="linux">Linux/Red Hat</option>
    <option value="rapidminer">Rapid Miner</option>
    <option value="no">No Skills</option>  
    </select>
<br>  <center> <button type="submit" class="btn" name="submit" >SUBMIT</button></center>
</form></center>
</form>
</body>
</html>

<center><h2><?php
if(isset($_POST['submit'])){
$mysqli=new mysqli('localhost','myuser','Iajneevarp321@','myDB');
$skill1=$mysqli->real_escape_string($_POST['skill1']);
$first=$mysqli->query("select JOB,companies from skill where SKILLS='$skill1'");
while($row = $first->fetch_assoc()){
        echo "Job Available for your skill 1 is  "
. $row['JOB'] ." at ".$row['companies']. "!"."<br>";
}
$skill2=$mysqli->real_escape_string($_POST['skill2']);
$first=$mysqli->query("select JOB,companies from skill where SKILLS='$skill2'");
while($row = $first->fetch_assoc()){
echo "Job Available for your skill 2 is  ". $row['JOB'] ." at  ".$row['companies']. "!"."<br>";
}
$skill3=$mysqli->real_escape_string($_POST['skill3']);
$first=$mysqli->query("select SKILLS,JOB,companies from skill where SKILLS='$skill3'");
while($row = $first->fetch_assoc()){
echo "Job Available for your skill 3 is  ". $row['JOB'] ." at ".$row['companies']. "!"."<br>";
}
}
?></h2></center>
