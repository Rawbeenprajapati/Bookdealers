<center>
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
  

session_start();
$code=rand(22222,99999);
$_SESSION["code"]=$code;

  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $username=$_POST['username'];
  $id_type=$_POST['idtype'];
  $id_number=$_POST['idum'];
  $district=$_POST['district'];
  $city=$_POST['city'];
  $email=$_POST['Email'];
  $p=$_POST['pass'];
  $re_p=$_POST['repass'];
  $number=$_POST['num'];
  // $ss=$_POST['screenshot'];
$sql = "INSERT INTO `register_buyer`(`firstname`,`lastname`,`username`,`id_type`,`id_number`,`district`,`city`,`email`,`password`,`confirm_password`,`contact_number`) VALUES ('$fname','$lname','$username','$id_type','$id_number','$district','$city','$email',md5('$p'),md5('$re_p'),'$number')";
mysqli_query($conn, $sql);




  $_SESSION["fname"]=$username;
  $_SESSION["lname"]=$lname;
  $_SESSION["username"]=$username;
  $_SESSION["idtype"]=$id_type;
  $_SESSION["idum"]=$id_number;
  $_SESSION["district"]=$district;
  $_SESSION["city"]=$city;
  $_SESSION["Email"]=$email;
  $_SESSION["pass"]=$p;
  $_SESSION["repass"]=$re_p;
  $_SESSION["num"]=$number;
  // $_SESSION["screenshot"]=$ss;
//   echo $_SESSION["idum"];
// exit();
// $username=$_POST['username'];
// $firstname=$_POST['firstname'];
// $lastname=$_POST['lastname'];
// $_SESSION["username"]=$username;
// $_SESSION["firstname"]=$firstname;
// $_SESSION["lastname"]=$lastname;

require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 0;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "pricelessr3o@gmail.com";
  $mail->Password = "stupid4us_2074";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  $mail->From = "pricelessr3o@gmail.com";
  $mail->FromName = "Sajha book thela";
  
  $mail->addAddress($_POST["Email"]);
  
  $mail->isHTML(true);
 $mail->addAttachment('lop.jpg', 'lop1.jpg'); //set new name

 
  $mail->Subject = "test mail";
  $mail->Body = "<i>this is your password:</i>".$code;
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
  {
   echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {
   // echo "<h1>OTP has been send succesfully in Your email Id please checkout </h1>";
   include('confirm_code.php')

   ?>
   
   <!-- <form action="mail2.php" method="post">

<input name="captcha" type="text">


<input type="submit" name="submit" value="submit">
</form> -->
<?php
}
?>

 </center> 