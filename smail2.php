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
	require_once("DBConnect.php");

$sql = "UPDATE `register_seller` SET `is_verified`=1 WHERE `id_number`=$data";
mysqli_query($conn,$sql);
session_destroy();
header('Location:sellsign.php');

//Do you stuff
}
else
{
echo "<script>alert('Invalid!');</script>";
include('sconfirm_code.php')
?>

<?php 
  } 
?>
</center>