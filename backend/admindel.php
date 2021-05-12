<?php
$user_id = @$_GET['id'];
if (!isset($user_id)) {
	header('Location: admin.php');
}
 
require_once('DBConnect.php');
$sql = "DELETE FROM `register_user` WHERE id='$user_id';";

if (mysqli_query($conn, $sql)) {

    header('Location: admin.php');
    //echo "<script>alert('successfully deleted from cart')</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}