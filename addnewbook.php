<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" href="images/logo.png">
  <title>Sajha Book Thela-Add new book</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form action="action.php" method="POST" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Book name:</span>
										<input class="form-control" type="text" name="name" placeholder="Complete name of book" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">ISBN:</span>
										<input class="form-control" type="text" name="isbn" placeholder="upto only 13 character" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Writer name:</span>
										<input class="form-control" type="text" name="writer" required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Edition:</span>
										<input class="form-control" type="number" name="edition" required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">ID:</span>
										<input class="form-control" type="number" name="id" placeholder="enter random no" required>
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn" name="verify">Done</button>
									</div>

									<div class="row">
									<div class="col-md-3">
									<div class="form-btn">
										<input type="file" name="file" id="file" required="required">								
									</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>