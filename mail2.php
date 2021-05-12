<center>
<br>
<br>
<br>
<br>
<br>


<?php
session_start();
// echo "string";

$data=$_SESSION["idum"];



if(isset($_POST["captcha"]) && $_POST["captcha"]!="" && $_SESSION["code"]==$_POST["captcha"])
{
	$host = "localhost";
  $dbUsername="root";
  $dbPassword ="";
  $dbname="sbt_db";

 //creating connection
  $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);

  if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
  }

$sql = "UPDATE `register_buyer` SET `is_verified`=1 WHERE `id_number`=$data";
mysqli_query($conn,$sql);



session_destroy();
header('Location:buysignin.php');

//Do you stuff
}
else
{
echo "<script>alert('Invalid!');</script>";
include('confirm_code.php')
?>

<!-- <form action="mail2.php" method="post">
  <input name="captcha" type="text">
  <input type="submit" name="submit" value="submit">
</form>
 -->
 
<?php 
  } 
?>

<!-- <a href="index2.php">Index</a> -->
</center>