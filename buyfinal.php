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
	<title>Download-SBT(buy receipt)</title>
	<style>
	h3{
		float: right;
		margin-top:1%;

	}
  table{
    text-align: center;
  }
  h5{
    float: left;
  }
  .container{
    text-align: center;
  }
  hr{
    margin-left:1%;
    margin-right:1%;
    border-top: 2px dotted black;

  }
  p{
    font-weight: bold;
    font-size: 20px;
    float:left;
    margin-left:5%;
    font-family: sans-serif;
  }
  a{
    text-decoration: none;
  }

</style>
</head>
<body>
	<div class="container">
    <h2> <a href="clearbuycart.php" style="text-decoration: none;"> Sajha Book Thela</a></h2>
 
   <h3>
     Date:
     <?php
     

     echo  date("Y-m-d") . "<br>"
     ?>
   </h3><br><br>

   <h5>
     Order-Id:SBT-
     <?php
     session_start();

     $_SESSION['orderid']= rand(1,1000);
     echo $_SESSION['orderid'] ."<br>"
     ?>
   </h5>
   <br><br>
   <h2><u>Details of customer</u></h2><br>
   <?php
// require 'DBConnect.php';
   $server = "localhost";
   $username = "root";
   $pwd = "";
   $db = "sbt_db";
// Create connection
   $conn = mysqli_connect($server, $username, $pwd, $db);
// Check connection
   if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  // if(isset($_POST['Login']))
  // {
  // session_start();
  $username= $_SESSION['username'];
	// echo "$username";
   $sql ="SELECT * FROM `register_buyer` WHERE `username` = '$username'";
   $result = mysqli_query($conn, $sql);

   ?>
   <table border="1" cellspacing="1" cellpadding="1" width="100%">
    <tr>
      <th>S.N</th>
      <th>First name</th>
      <th>Last name</th>
      <th>ID type</th>
      <th>ID number</th>
      <th>District</th>
      <th>City</th>
      <th>Email</th>
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
      $i=0;
      while($row = mysqli_fetch_assoc($result)) {
       ?>
       <tr>
        <td><?= ++$i;?></td>
        <td><?= $row["firstname"];?></td>
        <td><?= $row["lastname"];?></td>
        <td><?= $row["id_type"];?></td>
        <td><?= $row["id_number"];?></td>
        <td><?= $row["district"];?></td>
        <td><?= $row["city"];?></td>
        <td><?= $row["email"];?></td>
      </tr>
      
      <?php
    }  
    } 
  else 
  {
    ?>
    <tr>
     <?php echo "<h2>No record found</h2>" ?>
     <!-- <td colspan="3">No Record(s) found.</td> -->
   </tr>
   <?php
 }
 ?>
 <?php 
 mysqli_close($conn);
?>
</table>
<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>end of details of seller>>>>>>>>>>> -->
<br><h2><u>Details of Book</u></h2><br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sbt_db";

        // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection

if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `buyer_cart` WHERE 1 Limit 0, 20";
$result = mysqli_query($conn, $sql);
      // $data = mysqli_num_rows($result);
      // echo "<pre>"; print_r($result); exit();
?>
<table border="1" cellspacing="15" cellpadding="15" width="100%">
  <tr>
    <th>S.N.</th>
    <!-- <th>ID</th> -->
    <th>Book name</th>
    <th>Image</th>
    <!-- <th>ISBN</th> -->
    <th>Writer name</th>
    <th>Edition</th>
    <!-- <th>Enter the quantity</th> -->
    <th>Quantity</th>
    <th>Price</th>
  </tr>
  <?php
  if (mysqli_num_rows($result) > 0) {
    $i=0;
    while($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <td><?= ++$i;?></td>

        <td><?= $row["book_name"];?></td>

        <td>
          <img src=" <?= $row["book_image"];?>" class="card-img-top" style="padding:10%;" height="200" >
        </td>
        <td><?= $row["writer_name"];?></td>
        <td><?= $row["edition"];?></td>
        <td><?= $row["quantity"];?></td>
        <td><?= $row["book_price"];?></td>
      </tr>
      <?php
    }   
  }
  else
  {
    ?>
    <tr>
      <td colspan="7">No Record(s) found.</td>
    </tr>
    <?php
  }
  ?>

  <?php 
  mysqli_close($conn);
  ?>
</table>



<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>end of book details>>>>>>>>>>>>> -->
<span style="font-weight: bold;">Please download this page as pdf and keep it untill we complete the transcation<br>&#128525;Thank You!&#128525; </span>
<br>
   <b>
    Total: Rs
        <?php 
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
            $numUsers = $row['num'];
            echo $numUsers;

            ?>
          </b><br>
<hr>
<h3>
  Date:
  <?php
  echo  date("Y-m-d") . "<br>"
  ?>
</h3><br><br>

<h5>
  Order-Id:SBT-
  <?php
  echo $_SESSION['orderid'] ."<br>"
  ?>
</h5><br><br>
<h5>Respected Sir/Mam,</h5><br>
<p>I assure that I received the order that I had ordered from Sajha Book Thela (SBT) completely.</p><br><br><br><br><br><br>
<hr style="float:right;width:20%;"><br><BR>
<span style="float:right;font-weight: bold;margin-right:4%;">Signature of Buyer</span>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>