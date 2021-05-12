
<?php
if(isset($_POST['submit'])){
	$e = $_POST['email'];
	$pa = md5($_POST['password']);
	$repa=md5($_POST['repassword']);
	if ($pa!=$repa) 
	{
		echo "<script>alert('Invalid Email or passwords!');</script>";
	}

   //echo $sql;
	$host = "localhost";
	$dbUsername="root";
	$dbPassword ="";
	$dbname="sbt_db";
	$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
   $sql = "SELECT * FROM `register_buyer` WHERE (`email`='$e');";
   $result = mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) > 0) 
   {
		
   //echo "<script>alert('Valid!');</script>";
   	$sql1 = "UPDATE `register_buyer` SET `password`='$pa',`confirm_password`='$repa' WHERE `email`='$e'";
   	$result1 = mysqli_query($conn, $sql1);
   // if (mysqli_num_rows($result) > 0) 
   // {
   	   echo "<script>alert('You have successfully changed the password!');</script>";

       echo "<script>window.location='buysignin.php';</script>";		
        exit; 
    // }
	}
	else
	{
		echo "<script>alert('Email doesnot match!');</script>";
		echo "<script>window.location='repassbuy.php';</script>";
		exit;
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="images/logo.png">
	<title>Sajha Book Thela-Re_password(buyer)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <style>

  .box{
  	margin-top: 10%;
  	margin-left:35%;
  	border:1px solid black;
  	height:50%;
  	width:30%;
  }
  .box:hover{
  	margin-top: 10%;
  	margin-left:35%;
  	border:1px solid black;
  	height:50%;
  	width:30%;
  	/*border-top:2px solid white;*/
  border-left:1px dotted white;
  border-right:1px dotted white;
  }

  .container-fluid{
  	text-align: center;
  	padding-top: 5%;
  	background-color:black; 
  	height:570px;
  }
  input[type="email"],input[type="password"]
   {
  width: 80%;
  border-bottom:2px solid green;
  border-top:2px solid white;
  border-left:2px solid white;
  border-right:2px solid white;
  border-radius: 5%;
  margin:2%;

}
 input[type="email"]:hover,input[type="password"]:hover
   {
  width: 80%;
  border-bottom:2px solid green;
  border-top:2px solid green;
  border-left:2px solid green;
  border-right:2px solid green;
  border-radius: 5%;
  margin:2%;
}
input[type="submit"]
{
  color:black;
  border-radius: 5%;
  background-color: yellow;
  border:1px solid black;
}
input[type="submit"]:hover
{
  color:white;
  border-radius: 5%;
  background-color: green;
  border:1px dotted yellow;
}


.col-md-2 i{
	padding-top:30%;
	
}
h5{
	font-family: sans-serif;
	color:white;
}

</style>
</head>
<body>

<div class="container-fluid">
	
	<div class="box">
		<marquee direction="left">
       <h5> Please enter the valid Email!!!</h5></marquee>
           <form method="POST" action="">
			<div class="row">
				<div class="col-md-2 col-4">
					<i class="fas fa-cloud" style='font-size:25px;color:white;'></i>
					
					<i class='far fa-eye' style='font-size:25px;color:white;'></i>
					
					<i class='fas fa-eye' style='font-size:25px;color:white;'></i>
				</div>
				<div class="col-md-10 col-8">
				<input type="email" name="email" placeholder="@gmail.com" required="required">
			 <input type="password" name="password" placeholder="New password" required="required">
			 <input type="password" name="repassword" placeholder="Confirm password" required="required">
			 <br>
			 <br>
			 <input type="submit" name="submit"  value="submit">
		</div>
		</div>
		</form>

  
</div>
  

  <!-- Button to Open the Modal -->
 <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Ok
  </button>
 -->
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Enter your valid Email</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form>
          	<input type="email" name="email" placeholder="@gmail.com" required="required">
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

</body>
</html>