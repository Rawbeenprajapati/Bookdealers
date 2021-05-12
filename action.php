<?php

session_start();
require 'DBConnect.php';
   
if(isset($_POST['submit']))
{
	$bookid = $_POST['id'];
	$bookname = $_POST['name'];
	$bookimage = $_POST['image'];
	$bookisbn = $_POST['isbn'];
	$bookwriter = $_POST['writer'];
	$bookedition = $_POST['edition'];
	$bookqty = 1 ;
    $uid=$_SESSION['userid'];	
    $u=$_SESSION['username'] ;
$sql="SELECT * FROM `seller_cart` WHERE `sellid`='$uid' AND `pid`='$bookid'";
  $result=mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
      echo "<script>alert('Book is already added to cart')</script>";
    echo "<script>window.location='isbn.php';</script>";
   }else{
    // echo "nepal";exit();
	 $sql = "INSERT INTO `seller_cart` (`pid`,`sellid`,`username`,`book_name`, `book_image`, `isbn`, `writer_name`, `edition`, `quantity`) VALUES ($bookid,$uid,'$u','$bookname','$bookimage','$bookisbn','$bookwriter',$bookedition,$bookqty)";

      if(mysqli_query($conn, $sql)){
      echo "<script>alert('successfully book is added in cart')</script>";
    // echo "Records added successfully.";
    echo "<script>window.location='isbn.php';</script>";
  } 
   else{echo "Error updating record: " . mysqli_error($conn);}
}
mysqli_close($conn);
}
///////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['verify']))
{

	$bookid = $_POST['id'];
	$bookname = $_POST['name'];
	// $bookimage = $_POST['image'];
	$bookisbn = $_POST['isbn'];
	$bookwriter = $_POST['writer'];
	$bookedition = $_POST['edition'];
	$bookqty = 1 ;
    $u=$_SESSION['username'] ;
    
    $files = $_FILES['file'];
    $filename =  $files['name'];
    $fileerror = $files['error'];
    $filetmp = $files['tmp_name'];
    $extension = explode('.',$filename);
    $filecheck = strtolower(end($extension));
    $fileextstored = array('png', 'jpg', 'jpeg');

    if (!in_array($filecheck, $fileextstored )) {
       echo "You file extension must be .png, .jpg or .jpeg";
    } 
    else {
        // move the uploaded (temporary) file to the specified destination
        $destination = 'images/1sem/'.$filename;
        move_uploaded_file($filetmp, $destination);
	
 $sql = "INSERT INTO `seller_cart` (`id`,`username`, `book_name`, `book_image`, `isbn`, `writer_name`, `edition`, `quantity`) VALUES ($bookid,'$u','$bookname','$destination','$bookisbn','$bookwriter',$bookedition,$bookqty)";
      if(mysqli_query($conn, $sql)){
      echo "<script>alert('successfully book is added in cart')</script>";
    // echo "Records added successfully.";
    echo "<script>window.location='isbn.php';</script>";

} 

else{
    // echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    echo "<script>alert('Book is already added to cart')</script>";
    echo "<script>window.location='isbn.php';</script>";
}
}
}
?>