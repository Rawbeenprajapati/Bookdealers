<div class="container-fluid">
	<section id="header">
		<div class="row">
			<div class="col md-4">
				<h5>ADMIN-SJT(Sajha Book Thela)</h5>
			</div>
			<div class="col md-4">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="" style="width:5%;">
					<div class="input-group-append">
						<button class="btn btn-info" type="submit">Go</button>  
					</div>
				</div>
			</div>
			<div class="col md-4">
           <i class="fas fa-user-secret ml-1" style="margin-left:0%;" title="admins">
					<span id="card-item" class="badge badge-primary">
						<?php 


						$server = "localhost";
						$username = "root";
						$pwd = "";
						$db = "sbt_db";

						$conn = mysqli_connect($server, $username, $pwd, $db);
						if (!$conn) 
						{
							die("Connection failed: " . mysqli_connect_error());
						}
						$data = mysqli_query($conn,'SELECT COUNT(`id`) AS num FROM `register_user`') or die(mysql_error());
						$row = mysqli_fetch_assoc($data);
						$numUsers = $row['num'];
						echo $numUsers;

						?>
					</span>	
				</i>
				<!-- ///////////////////////////////////////////////////// -->
				<i class="fas fa-users" style="margin-left:0%;" title="total buyers">
					<span id="card-item" class="badge badge-info">
						<?php 


						$server = "localhost";
						$username = "root";
						$pwd = "";
						$db = "sbt_db";

						$conn = mysqli_connect($server, $username, $pwd, $db);
						if (!$conn) 
						{
							die("Connection failed: " . mysqli_connect_error());
						}
						$data = mysqli_query($conn,'SELECT COUNT(`id`) AS num FROM `register_buyer`') or die(mysql_error());
						$row = mysqli_fetch_assoc($data);
						$numUsers = $row['num'];
						echo $numUsers;

						?>
					</span>	
				</i>
				<!-- /////////////////////////////////////////////// -->
				<i class='fa fa-envelope' title="total messages">
					<span id="card-item" class="badge badge-success">
						<?php 


						$server = "localhost";
						$username = "root";
						$pwd = "";
						$db = "sbt_db";

						$conn = mysqli_connect($server, $username, $pwd, $db);
						if (!$conn) 
						{
							die("Connection failed: " . mysqli_connect_error());
						}
						$data = mysqli_query($conn,'SELECT COUNT(`message_no`) AS num FROM `message`') or die(mysql_error());
						$row = mysqli_fetch_assoc($data);
						$numUsers = $row['num'];
						echo $numUsers;

						?>
					</span>	


				</i>
				<!-- ////////////////////////////////////////////////////////// -->
				<i class="far fa-user-circle" style="margin-left:0%;" title="total sellers">
					<span id="card-item" class="badge badge-danger">
						<?php 


						$server = "localhost";
						$username = "root";
						$pwd = "";
						$db = "sbt_db";

						$conn = mysqli_connect($server, $username, $pwd, $db);
						if (!$conn) 
						{
							die("Connection failed: " . mysqli_connect_error());
						}
						$data = mysqli_query($conn,'SELECT COUNT(`id`) AS num FROM `register_seller`') or die(mysql_error());
						$row = mysqli_fetch_assoc($data);
						$numUsers = $row['num'];
						echo $numUsers;

						?>
					</span>	
				</i>
					<!-- ////////////////////////////////////////////////////////// -->
				<i class="far fa-chart-bar" style="margin-left:0%;" title="total buy transaction">
					<span id="card-item" class="badge badge-warning">
						<?php 


						$server = "localhost";
						$username = "root";
						$pwd = "";
						$db = "sbt_db";

						$conn = mysqli_connect($server, $username, $pwd, $db);
						if (!$conn) 
						{
							die("Connection failed: " . mysqli_connect_error());
						}
						$data = mysqli_query($conn,'SELECT COUNT(`transcation no`) AS num FROM `buyer_transaction`') or die(mysql_error());
						$row = mysqli_fetch_assoc($data);
						$numUsers = $row['num'];
						echo $numUsers;

						?>
					</span>	
				</i>
					<!-- ////////////////////////////////////////////////////////// -->
					<!-- <i class="fas fa-business-time"></i> -->
				<i class="fas fa-chart-line" style="margin-left:0%;" title="total sell transaction">
					<span id="card-item" class="badge badge-dark">
						<?php 


						$server = "localhost";
						$username = "root";
						$pwd = "";
						$db = "sbt_db";

						$conn = mysqli_connect($server, $username, $pwd, $db);
						if (!$conn) 
						{
							die("Connection failed: " . mysqli_connect_error());
						}
						$data = mysqli_query($conn,'SELECT COUNT(`transcation no`) AS num FROM `seller_transaction`') or die(mysql_error());
						$row = mysqli_fetch_assoc($data);
						$numUsers = $row['num'];
						echo $numUsers;

						?>
					</span>	
				</i>

				<!-- ////////////////////////////////////////////////////// -->
				<a href="../index.php" style="text-decoration:none;"><h7>Log out</h7></a>
			</div>
		</div>

	</section >
</div>