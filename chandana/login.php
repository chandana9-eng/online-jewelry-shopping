<?php
// Connect to server and select database.
$con = mysqli_connect("localhost","db  user name","db password","db name");
if($con->connect_error)
{
      die("Connection Failed:  ".$con->connect_error);
}

$user = $_POST["user"];
$pwd = $_POST["pwd"];

$query1 = "select * from users where userid='$user' and passkey='$pwd'";

$result=$con->query($query1);

$no= mysqli_num_rows($result);

if($no==1)
 {  
     echo " Valid User.......!<br>";
     echo " Welcome ".$user ;
 }
else
      {echo "<Font size='24' color='purple'> ".$user ."</font> <br>";
      echo "<Font size='24' color='red'>  In-Valid User.......!</font> <br>";
}
?>