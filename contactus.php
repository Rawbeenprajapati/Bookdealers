<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="images/logo.png">
  <title>Sajha Book Thela-Contact us</title>
</head>
<body>
   <?php 
    // session_start();
    // session_destroy();
    ?>


 <?php
 if(isset($_POST['send'])){

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql = "INSERT INTO `message` (`name`,`email`,`message`) VALUES ('$name','$email','$message')";
    $host = "localhost";
    $dbUsername="root";
    $dbPassword ="";
    $dbname="sbt_db";
   
     //creating connection
  $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);

  if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
  }
    if(mysqli_query($conn, $sql)){
    header('Location:index.php');
    }
    else{
      echo"Error: " .$sql ."<br" .mysqli_error($conn);
      header('Location:contactus.php');

}
    mysqli_close($conn);
 }
 ?>

<?php include('header.php')?>
 
 <section class="section mt-5">
  <div class="container">
    <div class="row">
      <div class="col ">
        <div>
          <img  class="img-fluid" style="height: 100%;width: 100%;"   src="images/5.jpg" />
        </div>
      </div>
      <div class=" col-lg-4  d-flex align-items-center ">
      <section class="form-dark mb-1">

  <!--Form without header-->
   <div class="col  d-flex justify-content-center"> <div class="card card-image" style="background-image: url('images/o.jpg');background-repeat: no-repeat; background-size: cover;  ">
<!-- 
 <div class="col d-flex justify-content-center"> <div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table%20(7).jpg');background-repeat: no-repeat; background-size: cover;  " class="p-2 "> -->
    <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">

      <!--Header-->
      <div  class="text-center">
        <h3 class="white-text mb-5 mt-4 font-weight-bold text-uppercase"><strong style="color: green">Contact</strong> <a class="green-text font-weight-bold"><strong  style="color: green">
              Us</strong></a></h3>
      </div>
<form method="POST" action="" >
    <div style="color: black;" class="md-form">
        <i class="fas fa-user prefix grey-text"></i>
        <input type="text" id="form104" class="form-control" name="name" required="required">
        <label for="form104"> Username/Name</label>
    </div>

         <div style="color: black;" class="md-form">
        <i class="fas fa-envelope prefix grey-text"></i>
        <input type="email" id="form105" class="form-control" name="email" required="required">
        <label for="form105">Your email</label>
      </div>


 <div style="color: black;" class="md-form">
        <i class="fas fa-pencil-alt prefix grey-text"></i>
        <textarea id="form107" class="md-textarea form-control" rows="5" name="message" required="required">
        </textarea>
        <label for="form107">Your message</label>
      </div>
   

    

      <!--Grid row-->
      <div class="row d-flex align-items-center">

        <!--Grid column-->
        <div class="text-center col-md-12 mt-3 mb-2">
          <input type="submit" name="send" value="Send" style="background-color: green;margin:5%;margin-left:10%;height:30%;width:40%;border:1px solid green;color:black;border-radius: 5%;"  \>
          <!-- <button type="button" class="btn btn-success btn-block btn-rounded z-depth-1">Send</button> -->
        </div>
      </div>
    </form>
        <br>
         <p style="color: black;text-align: center;"> contact with:</p>
      <a type="button" class="btn-floating btn-fb btn-sm">
        <i style="color: black;" class="fab fa-facebook-f"></i>
      </a>
      <a type="button" class="btn-floating btn-tw btn-sm">
        <i style="color: black;"class="fab fa-twitter"></i>
      </a>
      <a type="button" class="btn-floating btn-li btn-sm">
        <i style="color: black;" class="fab fa-linkedin-in"></i>
      </a>
      <a type="button" class="btn-floating btn-git btn-sm">
        <i style="color: black;"class="fab fa-github"></i>
      </a>
        <!--Grid column-->
      </div>
      <!--Grid row-->

    </div>
  </div>
  <!--/Form without header-->
</div>
</section>
      </div>
    </div>
  </div>
</section>
 <?php include('footer.php')?>
</body>
</html>