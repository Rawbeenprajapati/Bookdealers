<?php

$host = "localhost";
	$dbUsername="root";
	$dbPassword ="";
	$dbname="sbt_db";

 //creating connection
	$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);

	if(!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}
	
if(isset($_SESSION['username'])) {
  echo "Your session is running " . $_SESSION['username'];

  $username=$_SESSION['username'];
  $id_type=$_SESSION['idtype'];
  $id_number=$_SESSION['idum'];
  $district=$_SESSION['district'];
  $city=$_SESSION['city'];
  $email=$_SESSION['Email'];
  $p=$_SESSION['pass'];
  $re_p=$_SESSION['repass'];
  $number=$_SESSION['num'];
  $ss=$_SESSION['screenshot'];

$sql = "INSERT INTO `register_buyer`(`firstname`,`lastname`,`username`,`id_type`,`id_number`,`district`,`city`,`email`,`password`,`confirm_password`,`contact_number`,`image`) VALUES ('$fname','$lname','$username','$id_type','$id_number','$district','$city','$email',md5('$p'),md5('$re_p'),'$number','$ss')";


mysqli_query($conn, $sql);
if(mysqli_query($conn, $sql)){
		header('Location:buysignin.php');
	}else{
		echo"Error: " .$sql ."<br" .mysqli_error($conn);
	}
	mysqli_close($conn);

}

?>