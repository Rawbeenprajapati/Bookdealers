<?php
session_start();
if(!isset($_SESSION['userid']))
{
	header('location:sellsign.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
	<link rel="icon" href="images/logo.png">
	<title>SBT-Selling_Cart</title>
	<meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
  </script>
	<style>
	body{
		background-image: url(images/res.jpg);
		background-repeat: no-repeat;
		background-size: cover;
		background-attachment: fixed;
		font-family:new time roman;

	}
	.fluid-container{
		height:1000px;
		text-align: center;
		font-weight: bold;
		
	}

	.box{
		background-color: white;
		margin-left: 10%;
		margin-right: 1%;
		width: 85%;
		opacity: 0.75;
	}
	h2{
		margin-left: 2%;
		color:white;
		font-family: sans-serif;
	}
	hr{
		border-top: 1px dotted white;
		margin-left: 1%;
		margin-right: 1%;

	}
	input{
		width:40%;
		border:1px dashed blue;
	}

	/*/////////////////////////////////////////*/


</style>
</head>
<body>
	<div class="fluid-container">
		<h2>
			<a href="isbn.php"><button class="btn btn-success" name="confirm"><i class="fas fa-home" style="color:black;"></button></i></a>
			<i class="fas fa-shopping-cart" style="color:lightgreen;"></i><span style="color:black;">Cart Details|</span>
				<!-- /////////////////////toggal start///////////////// -->
			 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Sign Out</button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title" style="color:black;">
          	<b>
          	<?php 
          	// session_start();
          	$username = $_SESSION['username'];
          	echo $username ;
          	session_destroy();

          	?>
          	Thankyou for your response to our website</b>

          </h6>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="color:black;">
         <h6> Are you sure you want to sign out?</h6>
        </div>
        
        <!-- Modal footer -->
       
        <div class="modal-footer">
        	
     
   <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="window.location = 'index.php';">
        	          	 

           Confirm

           </button>
    
          
     
        </div>
       

        
      </div>
    </div>
  </div>
	<!-- //////////////////////////////////////////////////////end of toggal////////////////////	 -->
	
		</h2>
		<marquee direction="left">Please delete the item if you don't want to put further</marquee>
		<hr>
		<div class="box table-responsive">
			<?php		
			require_once("DBConnect.php");
			$uid=$_SESSION['userid'];
			$sql = "SELECT * FROM `seller_cart` WHERE `sellid`='$uid'";
			// $sql = "SELECT * FROM `buyer_cart`";
			$result = mysqli_query($conn, $sql);
			?>

			<!-- <table border="1" cellspacing="15" cellpadding="15"> -->
				<!-- <tr> -->
					<table border="1" class=" table table-bordered">
				<tr style="background-color:rgb(0,0,255,0.5);color: white;">
					<th>S.N.</th>
					<th>ID</th>
					<th>Book name</th>
					<th>Image</th>
					<th>ISBN</th>
					<th>Writer name</th>
					<th>Edition</th>
					<th>Enter the quantity</th>
					<th>Updated Quantity</th>
					<th>Action</th>
				</tr>
				<?php
				if (mysqli_num_rows($result) > 0) {
					$i=0;
					while($row = mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?= ++$i;?></td>
							<td><?= $row["id"];?></td>
							<td><?= $row["book_name"];?></td>
							<td>
								<img src=" <?= $row["book_image"];?>" class="card-img-top" height="100">
							</td>
							<td><?= $row["isbn"];?></td>
							<td><?= $row["writer_name"];?></td>
							<td><?= $row["edition"];?></td>
							<td>

								<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
								<?php 
								require_once("DBConnect.php");
								if(isset($_POST['submit']))
								{
									$bookid = $_POST['id'];
									$bookqty = $_POST['qty'];;
									$sql = "UPDATE seller_cart SET `quantity`='$bookqty' WHERE `id` = '$bookid'";
									if(mysqli_query($conn, $sql)){
										echo "<script>alert('successfully quantity is updated in cart')</script>";

										echo "<script>window.location='selling_cart.php';</script>";


									} else
									{

										echo "<script>alert('Error!!!')</script>";
										echo "<script>window.location='selling_cart.php';</script>";

									}
												}
								?>
								<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
								<form action="" method="POST">
									<input type="hidden" class="bookid" name="id" value="<?= $row["id"]?>">
									<input type="number" name="qty" >
									<input type="submit" name="submit" value="OK">

								</form>
							</td>
							<td><?= $row["quantity"];?></td>
							<td>
								<a style="color: #F00; text-decoration: none;" onclick="return confirm('Are you sure you want to delete this book?')" href="sellcartdel.php?id=<?= $row['id'];?>">
									<i class="fas fa-trash"></i>
								</a>
							</td>
						</tr>
						<?php
					}   
				}
				else
				{
					?>
					<tr>
						<td colspan="10">No Record(s) found.</td>
					</tr>
					<?php
				}
				?>
				<?php 
				mysqli_close($conn);
				?>
			</table>
			<!-- end of table -->


		</div>
		<div class="confirm-box" style="color: red;">
			Complete US by proceeding ahead--->
			<a href="sellfinal.php">
				<br>
				<button class="btn btn-primary" name="confirm">Proceed</button>
			</a>
		</div>

	</div>

</body>
</html>