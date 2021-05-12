<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
   <link rel="icon" href="images/logo.png">
  <title>Transaction in process</title>
</head>
<body>
<?php 
$server = "localhost";
$username = "root";
$pwd = "";
$db = "sbt_db";
$conn = mysqli_connect($server, $username, $pwd, $db);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
session_start();
$u = $_SESSION['username'];
$orderid=$_SESSION['orderid'];
$sql="INSERT INTO seller_transaction (id,username,book_name,book_image,isbn,writer_name,edition,quantity)
SELECT pid,username,book_name,book_image,isbn,writer_name,edition,quantity FROM  seller_cart WHERE `username`='$u' ";
if(mysqli_query($conn, $sql))
{

    $sql = "UPDATE `seller_transaction` SET `order_id` = '$orderid' WHERE `username`='$u'";
      if(mysqli_query($conn, $sql))
	{

	// $sql = "DELETE FROM `seller_cart` WHERE `username`='$u'";
      // if(mysqli_query($conn, $sql)){
      echo "<script>alert('Transaction is succesfully done')</script>"; 
    echo "<script>window.location='selling_cart.php';</script>";

// } 
}
}
else
{
    echo "<script>alert('Error in Transaction!!!')</script>";
    echo "<script>window.location='selling_cart.php';</script>";
}
// session_destroy();

?>
</body>
</html>