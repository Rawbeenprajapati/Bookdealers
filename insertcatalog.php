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
  if(isset($_POST['insert']))
  { 
     // echo "nepal";exit();
  	   $book=$_POST['book'];
       $name=$_POST['name'];
       $price=$_POST['price'];
       $isbn=$_POST['isbn'];
       $edition=$_POST['edition'];
       $image="images/1sem/".$_FILES['file']['name'];
       $writer=$_POST['writer'];
       $stock=$_POST['stock'];

$sql = "INSERT INTO `catalog`(`product_name`, `product_price`, `product_image`, `book`, `isbn`, `writer_name`, `edition`,`stock`) VALUES ('$name','$price','$image','$book','$isbn','$writer','$edition','$stock')";
       if(mysqli_query($conn,$sql))
       {
       	// echo "nepal";exit();

       	header('Location:catalog4.php');

       }
  }


?>
 <!DOCTYPE html>
  <html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
   <link rel="icon" href="images/logo.png">
  <title>Sajha Book Thela-confirm_code</title>
 </head>

 <body>
 	<div class="container">
 	
      <div><h1 style="color: blue;margin-left:30%;margin-top:2%;font-family: Bauhaus Md BT;"><span style="color: red;">B</span><span style="color:#CDDC39;">oo</span><span style="color:red;">k</span> <span style="color: red;">D</span><span style="color: #09e512;">esc</span><span style="color: #FFC107;">rip</span><span style="color:#3cd7c8;">tio</span><span style="color: red;">n</span></h1></div> 
      
 		<form action="" method="POST" enctype="multipart/form-data" class="form-container">
<div class="row" style="color:white;font-family:Bauhaus Md BT;font-size:20px; ">
	
       
       
						<label class="label col-md-2 control-label">BOOK</label>
						<div class="col-md-10">
							<select name="book" class="form-control selectpicker" required="required">

								<option value="">----</option>
								<option>math</option>
								<option>c</option>
								<option>physics</option>
								<option>workshop</option>
								<option>drawing</option>
								<option>edct</option>
								<option>eng</option>
					
							</select>
						</div>
						<label class="label col-md-2 control-label">Book_name</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="name" placeholder="Bookname
							" required="required">
						</div>
						<label class="label col-md-2 control-label">Book_price</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="price" placeholder="Book Price
							" required="required">
						</div>
						<label class="label col-md-2 control-label">Book_image</label>
						<div class="col-md-10" required="required">
							<input type="File" name="file">
						</div>
						<label class="label col-md-2 control-label">Writer_name</label>	
						<div class="col-md-10" required="required">
							<input type="text" class="form-control" name="writer" placeholder="writer name
							">
						</div>


						<label class="label col-md-2 control-label">Edition</label>
						<div class="col-md-10">
							<select name="edition" class="form-control selectpicker" required="required">
								<option value="">----</option>
			       				<option>2076</option>
								<option>2075</option>
								<option>2074</option>
								<option>2073</option>
								<option>2072</option>
								<option>2071</option>
								<option>2070</option>
		 					</select>
						</div>

						<label class="label col-md-2 control-label">ISBN_No</label>	
						<div class="col-md-10" required="required">
							<input type="number" class="form-control" name="isbn" placeholder="ISBN NO
							">
						</div>
						<label class="label col-md-2 control-label">Stock</label>	
						<div class="col-md-10" required="required">
							<input type="number" class="form-control" name="stock" placeholder="Stock
							">
						</div>

 	
 	<button type="submit"  class="btn btn-success btn-block btn-lg" name="insert">Submit</button>

</form>
</div>
 
</div>
 </body>
 </html