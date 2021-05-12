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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <title>Input ISBN-SBT</title>
  <style>
  .col{
     /*border:2px solid black;*/
     /*width:30%;*/
  }
  .container-fluid{
  	/*margin-top:1%;*/
  	background: linear-gradient(to left,#ffd89b,#19547b);
  	height:1000px;
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
    background-color: black;
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
	<div class="container-fluid">
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
			<th> Action </th>
          </tr>
          <?php
          if (mysqli_num_rows($result) > 0) {
            $i=0;
            while($row = mysqli_fetch_assoc($result)) {
               ?>
            <tr>
              <td><?= ++$i;?></td>
              <td><?= $row["product_name"];?></td>
              <td><?= $row["product_image"];?></td>
              <td><?= $row["isbn"];?></td>
              <td><?= $row["writer_name"];?></td>
              <td><?= $row["edition"];?></td>
               <td><button>Add to cart</button></td>
            </tr>
            <?php
          }   
        } 
        else 
        {
        ?>
        <tr>
        	<?php echo "<h2>No record found</h2>" ?>
          <!-- <td colspan="3">No Record(s) found.</td> -->
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
</body>
</html>