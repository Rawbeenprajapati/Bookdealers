<?php
$user_id = @$_GET['id'];
if (!isset($user_id)) {
	header('Location: buytrans.php');
}
 
require_once('DBConnect.php');
$sql = "DELETE FROM `buyer_transaction` WHERE `transcation no`='$user_id';";

if (mysqli_query($conn, $sql)) {

    header('Location: buytrans.php');
    //echo "<script>alert('successfully deleted from cart')</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}