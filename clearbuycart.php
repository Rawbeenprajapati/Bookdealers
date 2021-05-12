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
  require_once("DBConnect.php");
 session_start();
 // $u = $_SESSION['userid'];
 $u = $_SESSION['username'];

 $orderid = $_SESSION['orderid'];
 $data = mysqli_query($conn,'SELECT SUM(total_price) AS num FROM buyer_cart') or die(mysql_error());
 $row = mysqli_fetch_assoc($data);
 $totalprice = $row['num'];
 $sql="INSERT INTO buyer_transaction (id,username,book_name,book_price,book_image,quantity,isbn,writer_name,edition)
 SELECT pid,username,book_name,book_price,book_image,quantity,isbn,writer_name,edition FROM  buyer_cart ";

 if(mysqli_query($conn, $sql))
 {
  $sql = "UPDATE `buyer_transaction` SET `order_id` = '$orderid', `total_price` = '$totalprice' WHERE `username`='$u'";
  if(mysqli_query($conn, $sql))
  {
    // $sql = "DELETE FROM `buyer_cart` WHERE `username`='$u'";
    // if(mysqli_query($conn, $sql))
    // {

      echo "<script>alert('Transaction is successfully done')</script>"; 
      echo "<script>window.location='buyer_cart.php';</script>";
 
    // } 
  }
}
else
{
  echo "<script>alert('Error in storing record of Transaction!!!')</script>";
  echo "<script>window.location='buyer_cart.php';</script>";
}

/////////////////////updating catalog stock////////////
 $sql = "SELECT * FROM `buyer_transaction` WHERE `username`='$u'";
  $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0)
  {
  while($row = mysqli_fetch_assoc($result)) 
   {
      $bookid = $row["id"];
      $sql= "SELECT * FROM `catalog` WHERE `id`='$bookid'";
      if(mysqli_query($conn, $sql))
      {
        $data = mysqli_query($conn,"SELECT `stock` AS num FROM `catalog` WHERE `id`='$bookid'") or die(mysql_error());
        $row = mysqli_fetch_assoc($data);
        $stock = $row['num'];
        $data = mysqli_query($conn,"SELECT `quantity` AS num FROM `buyer_transaction` WHERE `id`='$bookid'") or die(mysql_error());
        $row = mysqli_fetch_assoc($data);
        $qty = $row['num'];
        $stock = $stock-$qty;
        $sql = "UPDATE catalog SET `stock`='$stock' WHERE `id` = '$bookid'";
         if(mysqli_query($conn, $sql))
        {
            // session_destroy();
           echo "<script>alert('Transaction is successfully done')</script>"; 
          echo "<script>window.location='buyer_cart.php';</script>";
     
        }
      }
    }
  }

// $data = mysqli_query($conn,"SELECT `id` AS num FROM `buyer_transaction` WHERE `username`='$u'") or die(mysql_error());
//       $row = mysqli_fetch_assoc($data);
//       $bookid = $row['num'];
//       $sql= "SELECT * FROM `catalog` WHERE `id`='$bookid'";
//       if(mysqli_query($conn, $sql))
//       {
//         $data = mysqli_query($conn,"SELECT `stock` AS num FROM `catalog` WHERE `id`='$bookid'") or die(mysql_error());
//         $row = mysqli_fetch_assoc($data);
//         $stock = $row['num'];
//         $data = mysqli_query($conn,"SELECT `quantity` AS num FROM `buyer_transaction` WHERE `id`='$bookid'") or die(mysql_error());
//         $row = mysqli_fetch_assoc($data);
//         $qty = $row['num'];
//         $stock = $stock-$qty;
//         $sql = "UPDATE catalog SET `stock`='$stock' WHERE `id` = '$bookid'";
//         if(mysqli_query($conn, $sql))
//         {
//             session_destroy();
//           echo "<script>window.location='index.php';</script>";
     
      //   }
      // }

//////////////////////////end of updating//////////////
?>
</body>
</html>