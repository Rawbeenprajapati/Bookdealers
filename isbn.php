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
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
 <title>Input ISBN-SBT</title>
 <style>
 .col{
   /*border:2px solid black;*/
   /*width:30%;*/
 }
 .container-fluid{
   /*margin-top:1%;*/
   background: linear-gradient(to left,#ffd89b,#19547b);
   height:600px;
 }
 .col img{
   width:90%;
   height:90%;
   margin-top: 2%;
 }
 .isbn{
   /*border:2px solid black;*/
   margin-top: 2%;
 }
 .col h1{
   text-align: center;
 }
 table{
   text-align: center;
   margin-top: 5%;
 }
 table td{
   margin-top: 5%;
 }
 input[type="submit"]
 {
   margin-left: 20%;
   margin-top: 2%;
   background-color: yellow;
   border:1px solid black;
   width:50%;
   border-radius: 5%;
 }
 input[type="submit"]:hover
 {
   margin-left: 20%;
   margin-top: 2%;
   background-color: green;
   border:1px solid yellow;
   width:50%;
   border-radius: 5%;
 }
 input[type="text"]
 {
  width:100%;
  /*background-color: black;*/
  border-radius: 5%;

}
input[type="text"]:hover
{ 

  width:100%;
  border-radius: 10%;
}
button{
 background-color: green;
 border-radius: 5%;
 color:white;
 border:1px solid black;
}

</style>
<body>

 <!-- >>>>>>>>>>>>>>>>>>>.. -->
 <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->

  <a class="navbar-brand" href="index.php">
    <i class="fas fa-home"></i>
    HOME

  </a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
   <!--    <li class="nav-item">
        <a class="nav-link" href="catalog4.php">Catalog</a>
      </li> -->
     <!--  <li class="nav-item">
        <a class="nav-link" href="#" style="color:red;">Sign out |</a>
      </li> -->
      <li class="nav-item">

        <a class="nav-link" href="selling_cart.php"><i class="fas fa-shopping-cart"></i>
         <span id="card-item" class="badge badge-danger">
          <?php 
          session_start();
require_once("DBConnect.php");

if(isset($_SESSION['userid']))
            {
              // echo "nepal";exit();
              $user=$_SESSION['userid'];
                            // echo "$user";exit();
              $sql="SELECT COUNT(`id`) AS num FROM `seller_cart` WHERE `sellid`=$user";
               $data = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_assoc($data);
            $numUsers = $row['num'];
                // $numUsers = $data;
            // echo "$numUsers";exit();
            }
            else
            {
              $numUsers=0;
            }
            echo $numUsers;
                
            


   ?>
    </span>
  </a>
</li>
   </ul>
 </div>
</nav>
<!-- ............................. -->
<div class="container-fluid">
  <div id="message"></div>

  <div class="row">
   <div class="col md-6 col-lg-4" >
    <h1><span style="color:red;">S</span>
     <span style="color:aqua;">a</span>
     <span style="color:blue;">j</span>
     <span style="color:orange;">h</span>
     <span style="color:yellow;">a</span>
   Book Thela</h1>
   <div class="isbn">
    <img src="images/ISBN.png" class="rounded-circle">
  </div>
  <br>
  <form action="" method="post">
    <input type="text" name="valueToSearch" placeholder="ISBN To Search"><br><br>
    <input type="submit" name="search" value="Filter"><br><br>
  </form>
</div>
<div class="col md-6 col-lg-8">
 <?php

 if(isset($_POST['search'])){
   $data = $_POST['valueToSearch'];

 require_once("DBConnect.php");
  $sql ="SELECT * FROM `catalog` WHERE `isbn` = '$data'";
  $result = mysqli_query($conn, $sql);

  ?>
  <h1>Search results</h1>
  <table border="0" cellspacing="50" cellpadding="50" width="100%">
    <tr>
      <th>S.N</th>
      <th>Book name</th>
      <th> Image</th>
      <th> ISBN</th>
      <th> Writer Name</th>
      <th> Edition</th>
      <!-- <th></th> -->
      <th>Action </th>
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
      $i=0;
      while($row = mysqli_fetch_assoc($result)) {
       ?>
       <tr>
        <td><?= ++$i;?></td>
        <td><?= $row["product_name"];?></td>
        <td>
         <img src=" <?= $row["product_image"];?>" class="card-img-top" height="250">

       </td>
       <td><?= $row["isbn"];?></td>
       <td><?= $row["writer_name"];?></td>
       <td><?= $row["edition"];?></td>
        <td>
        <form action="action.php" method="POST">
          <input type="hidden" class="bookid" name="id" value="<?= $row["id"]?>">
          <input type="hidden" class="bookname" name="name" value="<?= $row["product_name"]?>">
          <input type="hidden" class="bookimg" name="image" value="<?= $row["product_image"]?>">
          <input type="hidden" class="bookisbn" name="isbn" value="<?= $row["isbn"];?>">
          <input type="hidden" class="bookwriter" name="writer" value="<?= $row["writer_name"]?>">
          <input type="hidden" class="bookedition" name="edition" value="<?= $row["edition"]?>">
          <button class="btn btn-info btn-block" name="submit"> <i class="fas fa-cart-plus"></i>Add to cart</button>
            </form>
          </td>
        </tr>
      
      <?php
    }  
  } 
  else 
  {
    ?>

    <tr>
    	<td colspan="7">
    		<br>
     <?php echo "<h2>No record found</h2>" ?>
     <h5>Do you want add new publication book?</h5><br><a href="addnewbook.php" style="text-decoration: none;">Click Here</a>
     <!-- <td colspan="3">No Record(s) found.</td> -->
 </td>
   </tr>
   <?php
 }
 ?>
 <?php 
 mysqli_close($conn);
}
?>
</table>
</div>

</div>
<!-- end of first row -->


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>