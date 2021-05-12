<?php
$user_id = @$_GET['id'];
if (!isset($user_id)) {
	header('Location: selling_cart.php');
}
 
require_once('DBConnect.php');
$sql = "DELETE FROM `seller_cart` WHERE id='$user_id';";

if (mysqli_query($conn, $sql)) {

    header('Location: selling_cart.php');
    //echo "<script>alert('successfully deleted from cart')</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}