<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/back.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
  <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
  <link rel="icon" href="images/logo.png">
  <title>Sajha Book Thela-buyer_details</title>
  <style>
  a{
    text-decoration: none;
    color:black;
    /*padding-left:32%;*/
  }
  a:hover{
    text-decoration: none;
    color:white;
  }
  tr{
    color:white;
  }
  button{
    width:100%;
    /*background-color: black;*/
    background: linear-gradient(to right,black, #009999);
    border:1px solid #009999 ;

  }
  button:hover{
    width:100%;
    background-color: black;
    color:white;

  }
  .container-fluid{
    height:100%;

  }

</style>
</head>
<body>
  <!-- /// -starting of header div -->
  <?php include('header.php')?>
 <!-- /////////////////////////////////////////starting of body div -->
 <div class="fluid-container">
  <section id="block">
    <div class="row no-gutters">
      <!-- navigation section-start -->
      <?php include('nav.php')?>
      
      <!-- end of navigation section -->
      <!-- start of body div -->
      <div class="col-md-10" >





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

      $sql = "SELECT * FROM `register_buyer` WHERE 1 Limit 0, 20";
      $result = mysqli_query($conn, $sql);
      // $data = mysqli_num_rows($result);
      // echo "<pre>"; print_r($result); exit();
        ?>
        <h1>Customer-Buyer-List</h1>
        <table border="0" cellspacing="0" cellpadding="12">
          <tr>
            <th>S.N.</th>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Username</th>
            <th>District</th>
            <th>City</th>
            <th>Email</th>
            <th>Contact number</th>
          
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
              <td><?= $row["firstname"];?></td>
              <td><?= $row["lastname"];?></td>
              <td><?= $row["username"];?></td>
              <td><?= $row["district"];?></td>
              <td><?= $row["city"];?></td>
              <td><?= $row["email"];?></td>
              <td><?= $row["contact_number"];?></td>
              
              <td>
                <!-- <a style="color: #00F; text-decoration: none;"  href="useredit.php?id=<?= $row['id'];?>">&#9998;</a> -->
                <a style="color: #F00; text-decoration: none;" onclick="return confirm('Are you sure you want to delete this file?')" href="buyerdel.php?id=<?= $row['id'];?>">&#10008;</a>
              </td>
            </tr>
            <?php
          }   
        } else {
        ?>
        <tr>
          <td colspan="3">No Record(s) found.</td>
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
  <!-- end of body div -->
</div>
</section>
</div>


<!-- ending div of main -->
</body>
</html>