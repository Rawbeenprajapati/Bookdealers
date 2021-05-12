<?php 

// Change Info From Here
// session_start();
$epay_url = "https://uat.esewa.com.np/epay/main";
$pid = rand(1,1000);
 $_SESSION['orderid'] = $pid;
$successurl = "https://brp.com.np/esewa/success.php?q=su";
$failedurl = "https://brp.com.np/esewa/failed.php?q=fu";
$merchant_code = "epay_payment"; 
$fraudcheck_url = "https://uat.esewa.com.np/epay/transrec";

// For Amount Check
$actualamount = 100;

$server = "localhost";
$username = "root";
$pwd = "";
$db = "sbt_db";

$conn = mysqli_connect($server, $username, $pwd, $db);
if (!$conn) 
{
	die("Connection failed: " . mysqli_connect_error());
}
$data = mysqli_query($conn,'SELECT SUM(total_price) AS num FROM buyer_cart') or die(mysql_error());
$row = mysqli_fetch_assoc($data);
$total = $row['num'];

?>