<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/logo.png">
	<title>Sajha Book Thela-Cart</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
</head>
<body>


	<?php
	session_start();
	require_once("DBConnect.php");
	if(isset($_POST['remove']))
	{
 	// print_r($_GET['id']);
		if($_GET['action']=='remove')
		{
			foreach($_SESSION['cart'] as $key => $value){
				if($value['product_id']==$_GET['id'])
				{
					unset($_SESSION['cart'][$key]);
					echo "<script>alert(\"Book in the cart has been removed...!\")</script>";
					echo " <script>window.location='cart.php'</script>";
				}
			}
		}

	}
	?>
	<?php include('header.php')  ?>
	<style type="text/css">
	.shopping-cart{
		padding: 3% 0;
	}
	.cart-items+.cart-items{
		padding: 2% 0;
	}
	.hd{
		padding: 3% 2%;
	}
</style>

<script type="text/javascript">
	function increment()
	{
    var quantity=document.getElementsById("quantity").value;
     quantity=eval(quantity+1);
    document.getElementsById("quantity").value=quantity;
}
function decrement()
{

	var quantity=document.getElementsById("quantity").value;
	quantity=eval(quantity-1);
	document.getElementsById("quantity").value=quantity;
}

</script>
<?php include("component.php"); ?>

<div class="container-fluid">
	<div class="row px-5">
		<div class="col-md-7">
			<div class="shopping-cart">
				<h6>My cart</h6>
				<hr>
				<?php
				$total=0;
				if(isset($_SESSION['cart']))
				{
					if(isset($_POST['add']))
					{
				    // $i=0;
					//$q[$i]=$_POST['quantity'];
						$q=$_POST['quantity'];
				}
				    
					$product_id=array_column($_SESSION['cart'] , 'product_id');
					$sql = "SELECT * FROM `catalog`";
					$result = mysqli_query($conn, $sql);

					while($row = mysqli_fetch_assoc($result)) 
					{
        // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
						foreach($product_id as $id)
						{
							if($row['id']==$id)
							{    
							
								//$_session['q'] = $_POST['quantity'];
								cartElement($row['product_image'],$row['product_name'],$row['product_price'],$row['id']);
								$total=$total+((int)$row['product_price']*(int)$q);
								//$total=$total+((int)$row['product_price']*(int)$q[$i]);
								//session_destroy();
								//$i++;

							}
                           

						}

					}

				}

      
				else
				{
					echo "<h5>Cart is empty</h5>";
				}
				?>

			</div>
		</div>

		<div class="col-md-4  offset md-1 border rounded bg-white h-25" style="margin: 10% auto;">
			<h6 class="hd">Price Details</h6>
			<hr>

			<div class="row price-details">
				<div class="col-md-6">
					<?php
					if(isset($_SESSION['cart']))
					{
						$count=count($_SESSION['cart']);
						echo "<h6>Price($count items)</h6>";
					}
					else
					{
						echo "<h6>Price(0 items)</h6>";
					}


					?>
					<h6>Delivery Charges</h6>
					<hr>
					<h6>Amount Payable</h6>
				</div>
				<div class="col-md-6">
					<h6><?php echo "रू$total"; ?></h6>
					<h6 class="text-success">FREE</h6>
					<hr>
					<h6>रू<?php 
					echo $total;
					?></h6>
				</div>
			</div>

		</div>
	</div>
</div>
<?php include('footer.php')  ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>