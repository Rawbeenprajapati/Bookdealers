<?php
$user_id = @$_GET['id'];
if (!isset($user_id)) {
	header('Location: buyer_cart.php');
}
 
require_once('DBConnect.php');
$sql = "DELETE FROM `buyer_cart` WHERE id='$user_id';";

if (mysqli_query($conn, $sql)) {

    header('Location: buyer_cart.php');
    //echo "<script>alert('successfully deleted from cart')</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}