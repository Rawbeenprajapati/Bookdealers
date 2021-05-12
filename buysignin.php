 <?php
if(isset($_POST['Login'])){
	// echo "Nepal";exit;
	$u = $_POST['username'];
	session_start();
//   $_SESSION['username'] = $u;		
	$p = md5($_POST['pass']);
	$sql = "SELECT * FROM `register_buyer` WHERE (`username`='$u') AND `password`='$p' AND `status`=1 AND `is_verified`=1;";
	//echo $sql;
	$host = "localhost";
	$dbUsername="root";
	$dbPassword ="";
	$dbname="sbt_db";
	$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		$userid=$row['id'];
	
		// echo "Login Successful";exit;
		// session_start();
	$_SESSION['username']= $u;
	$_SESSION['userid']=$userid;
	echo "<script>alert(\"Welcome $u.\");</script>";
	echo "<script>window.location='catalog1.php';</script>";		
		exit; 
	}else{
		echo "<script>alert('Username or Password Incorrect!');</script>";
		echo "<script>window.location='buysignin.php';</script>";
		exit;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="images/logo.png">
	<title>Sajha Book Thela-Sign In</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/buysignin.css">
	<style>
	
</style>
</head>
<body>
	<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div style="margin-left: 10%;color:lightblue;">Sajha Book <span> Thela</span></div>
		</div>
		<br>
		<form class="login-form" method="POST" action="" >
		<div class="login">

				<input type="text" placeholder="username" name="username"><br>
				<input type="password" placeholder="password" name="pass"><br>
				<input type="submit" name="Login" value="Login" class="login-submit" style="background-color: green;margin:5%;margin-left:15%;height:30%;width:40%;border:1px solid green;color:black;border-radius: 5%;" />
				<br>
				<a style="color:yellow;padding-left:20%;text-decoration:none;" href="repassbuy.php">Forgot password???</a>
		</div>
	</form>

	</body>
	</html>