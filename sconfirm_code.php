  <!DOCTYPE html>
  <html>
  <head>
	<meta charset="utf-8">
	<link rel="icon" href="images/logo.png">
	<title>Sajha Book Thela-confirm_code</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
  <style>
  body{
  	background-image: url(images/option.jpg);
  	background-repeat: no-repeat;
  	background-size: cover;
  }
  .container{
  	margin-top:1%;
  	margin-left:10%;
  	/*text-align:center;*/
  }
  label{
  	color:orange;
  	font-family:times new roman;
  }
  input[type=text]{
  	width:25%;
  	background: linear-gradient(to right,#ff00cc,#333399);
  }
   input[type=text]:hover{
  	width:30%;
  	background: linear-gradient(to left,#833ab4,#fd1d1d,#fcb045);
  	transition-delay:3s;
  	color:black;
  }
  input[type=submit]{
  	width:10%;
  	text-align: center;
  	background: linear-gradient(to left,#5614b0,#dbd65c);
  	border-radius:10%;

  }
   input[type=submit]:hover{
  	width:10%;
  	text-align: center;
  	background: linear-gradient(to right,#5614b0,#dbd65c);
  	border-radius:10%;
  }
</style>
</head>
<body>
	<div class="container">
<form action="smail2.php" method="Post">
  <div class="form-group">
    <label for="pwd">Enter the confirmation code:</label>
    <input type="text" class="form-control" placeholder="" id="code" name="captcha">
  </div>
  <input type="submit" name="confirm" value="Confirm">
</form>
</div>
</body>
</html>