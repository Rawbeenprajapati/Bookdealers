<?php
require_once("DBConnect.php");

if(isset($_POST['add']))
{
    session_start();	 
	$bookid = $_POST['bookid'];
	$bookname = $_POST['bookname'];
	$bookprice = $_POST['bookprice'];
	$bookimg = $_POST['bookimg'];
	$bookqty = $_POST['bookqty'];
	$bookisbn = $_POST['bookisbn'];
	$bookwriter = $_POST['bookwriter'];
	$bookedition = $_POST['bookedition'];
	$bookstock = $_POST['bookstock'];
	$totalprice = $_POST['booktotal'];
	$u = $_SESSION['userid'];
  $username = $_SESSION['username'];
	$sql="SELECT * FROM `buyer_cart` WHERE `userid`='$u' AND `pid`='$bookid'";
  $result=mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
      echo "<script>alert('Book is already added to cart')</script>";
    echo "<script>window.location='catalog4.php';</script>";
   }else{
    // echo "nepal";exit();
    $sql = "INSERT INTO `buyer_cart` (`pid`,`userid`,`username`,`book_name`,`book_price`,`book_image`,`quantity`,`isbn`,`writer_name`, `edition`,`total_price`) VALUES ($bookid,'$u','$username','$bookname',$bookprice,'$bookimg',$bookqty,'$bookisbn','$bookwriter',$bookedition,$totalprice)";
      // require_once("DBConnect.php");
      if(mysqli_query($conn, $sql)){
      echo "<script>alert('Successfully book is added in cart')</script>";
    echo "<script>window.location='catalog4.php';</script>";
   } 
   else{echo "Error updating record: " . mysqli_error($conn);}
}
mysqli_close($conn);
}
?>