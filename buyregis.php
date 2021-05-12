<?php
session_start();
if(isset($_SESSION['userid']))
{
	// echo "nepal";exit();
	// header("Location : catalog4.php");
	echo "<script>window.location='catalog1.php';</script>";		
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="images/logo.png">
	<title>Sajha Book Thela-Buyer_Register</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="js/Bootstrap.js">
	<style>
	*{
		margin:0px;
		padding:0px;
	}
	body{
		background-image: url(images/11.jpg);
		background-repeat: no-repeat;
		background-size: cover;
		background-attachment: fixed;
		font-family:new time roman;
	}
	h1{
		font-size:40px;
		color:white;
		margin-top:250px;
	}
	p{
		font-size: 17px;
		color:black;
		text-shadow: 2px;
	}
	h3{
		font-size: 25px;
		color:white;
		padding-top:2%;
	}
	.glyphicon-exclamation-sign{
		font-size: 30px;
		color:red;
		float:right;
		margin-top:20px;
	}
	.col-md-7{
		margin-top:1%;
		box-shadow: -1px 1px 60px 10px black;
		background:rgba(0,0,0,0.4);

	}
	.label{
		font-weight: small;
		margin-top: 2%;
		color:white;
		font-size:15px;
	}
	.form-control{
		background:transparent;
		border-radius: 0px;
		border:0px;
		border-bottom:1px solid white;
		font-size:15px;
		margin-top: 1%;
		height:30px;
		color:white;
	}
	a{
		margin-left:30%;
		text-decoration: none;
		color:red;
		font-size: 18px;
	}
	a:hover{
		margin-left:30%;
		text-decoration: none;
		color:green;
		font-size: 18.5px;
	}
	button{
		margin-left: 46%;
		background-color: aqua;
		/*border:1px solid aqua;*/
		width:15%;
		border-radius:15%;
	}
	button:hover{
		margin-left: 46%;
		background-color: green;
		/*border-top:2px solid green;*/
		width:15%;
		border-radius:15%;
	}



</style>
</head>
<body>
	<div class="container">
		<form action="mail.php" method="POST">
			<div class="row">
				<div class="col-md-5">
					<h1 class="text-left"><span style="color:red;">S</span>
						<span style="color:aqua;">a</span>
						<span style="color:blue;">j</span>
						<span style="color:orange;">h</span>
						<span style="color:yellow;">a</span>s
					Book Thela</h1>
					<p class="text-left">Sajha Book Thela provides a variety of books for purchase throughout the Nepal. We work with different customer directly to give you the widest choice of books.
						<br>
						Since our establishment, we try our best to our clients save on books they choose to buy. As we partner with dozens of daily customer, so that every people always get the best prices without spending the time to find the best place to buy your favorite and important novels or college textbooks. Moreover, they are all available for online booking in just a few mouse clicks.
					</p>

				</div>
				<div class="col-md-7">
					<div class="row">

						<div class="col-md-6">
							<h3 class="text-left">Registration Form</h3>
						</div>
						<div class="col-md-6">
							<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
						</div>
					</div>
					<hr>

					<div class="row">
						<label class="label col-md-2 control-label">First name</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="fname" placeholder="first name
							" required="required">
						</div>
						<label class="label col-md-2 control-label">Last name</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="lname" placeholder="last name
							" required="required">
						</div>
						<label class="label col-md-2 control-label">Username</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="username" placeholder="username
							" required="required">
						</div>
						<label class="label col-md-2 control-label">ID type</label>
						<div class="col-md-10">
							<!-- <input type="text" class="form-control" name="id_type" placeholder="Citizenship/Licence/Passport" required="required"> -->
							<select name="idtype" class="form-control selectpicker" required="required">
								<option value="">----</option>
								<option>Citizenship</option>
								<option>Licence</option>
								<option>Passport</option>
							</select>
						</div>
						<label class="label col-md-2 control-label">ID number</label>	
						<div class="col-md-10" required="required">
							<input type="number" class="form-control" name="idum" placeholder="
							">
						</div>


						<label class="label col-md-2 control-label">District</label>
						<div class="col-md-10">
							<select name="district" class="form-control selectpicker" required="required">
								<option value="">----</option>
								<option>Kathmandu</option>
								<option>Bhakatpur</option>
								<option>Lalitpur</option>
							</select>
						</div>
						<label class="label col-md-2 control-label">City</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="city" placeholder="city
							" required="required">
						</div>
						<label class="label col-md-2 control-label">E-mail</label>
						<div class="col-md-10">
							<input type="Email" class="form-control" name="Email" placeholder="Email
							" required="required">
						</div>
						<label class="label col-md-2 control-label">Password</label>
						<div class="col-md-10">
							<input type="Password" class="form-control" name="pass" placeholder="password
							" required="required">
						</div>
						<label class="label col-md-2 control-label">Confirm password</label>
						<div class="col-md-10">
							<input type="Password" class="form-control" name="repass" placeholder="re-enter password
							" required="required">
						</div>
						<label class="label col-md-2 control-label">Contact number</label>	
						<div class="col-md-10" required="required">
							<input type="number" class="form-control" name="num" placeholder="+977
							">
						</div>
						<!-- /////////////////////////////////////////// -->
						<div class="col-md-10" style="margin-left: 17%;">
  <!--  <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile" name="screenshot">
    <label class="custom-file-label" for="customFile">Please include screenshot of your place using Google map</label>
  </div> -->
  <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
</div>

<!-- ///////////////////////////////////////////////// -->
					</div>
					<a href="buysignin.php">Already have an account??  Sign in</a><br>

					<button type="submit" name="submit" value="submit">SUBMIT</button>
					<!-- <button type="submit" class="btn btn-primary" value="create">Create</div> -->
					</div>


				</div><!-- end of row -->
			</form>

		</div><!-- end of container -->

	</body>
	</html>
