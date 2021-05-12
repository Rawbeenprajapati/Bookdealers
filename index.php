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
  <title>Sajha Book Thela-Home</title>
</head>
<body>
	<div class="header" id="topheader">
    <?php include('header.php')?>
    <?php 
    // session_start();
    // session_destroy();
    ?>
		<section class="header-section">
			<div class="center-div">
				<h1 class="font-weight-bold">
					New and Used Books
				</h1>
				<p>
					From applied literature to educational resources,we have a lot of textbooks to offer you
				</p>
				
					<a href="option.php">
            <button type="button" class="btn btn-dark" data-target="#option" data-toggle="modal">Buy/Sell</button>

          </a>
				
			</div>
		</section>
	</div>
	<!-- >>>>>>>>>>>>>>>>>>>end of header>>>>>>>>>> -->
	<!-- >>>>>>>>>>>>starting of about us>>>>> -->
	<section>
		<div class="container">
			<div class="row gap">
				<div class="col-md-6">
					<h2>About Us</h2>
					<p style="font-family: sans-serif;font-weight: 20px;text-align: justify;">
						Sajha Book Thela provides a variety of books for purchase throughout the Nepal. We work with different customer directly to give you the widest choice of books.
						<br>
						Since our establishment, we try our best to our clients save on books they choose to buy. As we partner with dozens of daily customer, so that every people always get the best prices without spending the time to find the best place to buy your favorite and important novels or college textbooks. Moreover, they are all available for online booking in just a few mouse clicks.
					</p>
					<br>
					<!-- <a href="#" style="text-decoration: none;color:grey;" >Read more>>></a> -->
				</div>
				<div class="col-md-6">
					<img src="images/5.jpg" class="img-fluid" alt="Aboutus">
				</div>
			</div>
		</div>
	</section>
	<!-- >>>>>>>>>>>>>>ending of about us>>>>>>>  -->
	<!-- >>>>>>>>>>>>>>>>>>>>>>>Three extra div start<<<<<<<<< -->
	<section class="header-extradiv">
		<div class="container">
			<div class="row">
				<!-- start of first div>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
				<div class="extra-div col-lg-4 col-md-4 col-12">
					<a href="#">
						<i class="fa-3x fa fa-desktop" aria-hidden="true"></i>
					</a>
					<h2>Easy to Use</h2>
					<p>
						Based on people majority,every people can use it smoothly without any hestiation and restriction.
					</p>
				</div>
				<!-- >>>>>>start of second div>>>>>>>>>>>>>>>>>>>>>>> -->
				<div class="extra-div col-lg-4 col-md-4 col-12">
					<a href="#">
						<i class="fa-3x fa fa-handshake-o" aria-hidden="true"></i>
					</a>
					<h2>Satisfaction Guaranteed</h2>
					<p>We hope that you will like our book service. Our team makes every effort to offer you an easy and enjoyable experience of books at any time of the year.
					</p>
				</div>
				<!-- >>>>>>>>>>>>>>>start of third div>>>>>>>>>>>>>> -->
				<div class="extra-div col-lg-4 col-md-4 col-12">
					<a href="#">
						<i class="fa-3x fa fa-usd" aria-hidden="true"></i>
					</a>
					<h2>Discount System</h2>
					<p>
						Clients of sajha book thela have an advantage of reduced book prices and discounts on new books from our catalog, which is updated daily.
					</p>
				</div>
				<!-- >>>>>>>>>>>>>>>>>end of third div>>>>>>>>>>>>>>>>>> -->
			</div>
		</div> 
	</div>
	<a href="aboutus.php" style="text-decoration: none;color:grey;" ><button type="button" class="btn btn-primary">Read more>>></button></a>
</section>
<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>end of three div>>>>>>>>>>>>>>> -->
<!-- >>>>>>>>>>>>starting of catalog>>>>>>>>>>>>>>>>>> -->
<style type="text/css">
  .card-group .card img{height: 310px;width: 204px;}

/*.card{
    background: radial-gradient(#ce1919a1, transparent);
}*/
.card-block{
  /*background: #0000ffbf;*/
  background-color: orange;
  position: absolute;
  bottom: 0%;
  width: 204px;
  color: white;
  display: none;
   font-family: lucida calligraphy;
}
.card-text{
  color:white;
  font-family: lucida calligraphy;
}
.card:hover .card-block{
  display: block;
}
.card{
  position: relative;
  border: solid white;
  margin-left: 10%;

}

</style>
<section>
<div class="container">
  <h2 style="margin-left: 45%;">Catalog</h2>
<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="gimages/10th.jpg" alt="Card image cap" >
    <div class="card-block">
      <h4 class="card-title">Software Engineering</h4>
      <p class="card-text">It contains new information that highlights various technological updates of recent years, providing readers with highly relevant and current information.</p>
    </div>
   </div>
  <div class="card">
    <img class="card-img-top" src="gimages/elex.jpg" alt="Card image cap" >
    <div class="card-block">
      <h4 class="card-title">Electronic Devices and Circuits</h4>
      <p class="card-text">Electronic devices and circuits by j b gupta explains the concepts of electrical components and circuits. Electronic circuits consist of inductors, diodes, resistors, capacitors and transistors.</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="gimages/sys.jpg" alt="Card image cap" >
    <div class="card-block">
      <h4 class="card-title">System Analaysis and Design</h4>
      <p class="card-text">System analysis and design continues to capture the experience of developing and analyzing systems in a way that readers can understand and apply and develop a rich foundation of skills as a systems analyst.
</p>
    </div>
   </div>
</div>
 <!-- ->>>>>>>>>>>>>ending of first row of catalog<<<<<<<<<< -->
<div class="card-group mt-3">
  <div class="card">
    <img class="card-img-top" src="gimages/physics3.jpg" alt="Card image cap" >
    <div class="card-block">
      <h4 class="card-title">Engineering Physics</h4>
      <p class="card-text"> This book contains conceptual arguments leading to the mathematical formulae providing a coherent mix of Physics and Mathematics.</p>
    </div>
   </div>
  <div class="card">
    <img class="card-img-top" src="gimages/maths1.jpg" alt="Card image cap" >
    <div class="card-block">
      <h4 class="card-title">Engineering Mathematics</h4>
      <p class="card-text">Part I deals with the applications of differential calculus and partial differentiation, vector calculus and infinite series.</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="gimages/c2.jpg" alt="Card image cap" >
    <div class="card-block">
      <h4 class="card-title">Let Us C++</h4>
      <p class="card-text">"Simplicity"- that has been the hallmark of this book in not only its previous fourteen English editions, but also in the Hindi, guajarati, Japanese, Korean, Chinese and us editions. This book does not assume any programming background. </p>
    </div>
   </div>
</div>
</div>
<br>
<a href="catalog.php" style="text-decoration: none;color:grey;margin-left: 43%;" ><button type="button" class="btn btn-primary">Read more>>></button></a>
</section>
<!-- >>>>>>>>>>>>>ending of catalog<<<<<<<< -->
<!-- >>>>>>>>>>>>>>>>>>>starting of gallery>>>>>>>>>>>>>>>>>> -->
<!-- Footer -->
  <div class="container mt-3">
  	<h2>Gallery</h2>

    <!--Grid row-->
    <div class="row">
      <marquee type="scroll" direction="left" >

      <!--Grid column-->
      <div class="col-lg-2 col-md-12 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="catimages/1sem/c.jpg" class="img-fluid"
            alt="">
            &nbsp&nbsp
            <img src="catimages/1sem/draw1.jpg" class="img-fluid"
            alt="">
             &nbsp&nbsp
             <img src="catimages/1sem/e1.jpg" class="img-fluid"
            alt="">
              &nbsp&nbsp
            <img src="catimages/1sem/math1.jpg" class="img-fluid"
            alt="">
              &nbsp&nbsp
               <img src="catimages/1sem/phy.jpg" class="img-fluid"
            alt="">
             &nbsp&nbsp
               <img src="catimages/1sem/work1.jpg" class="img-fluid"
            alt="">
              <img src="catimages/1sem/c.jpg" class="img-fluid"
            alt="">
            &nbsp&nbsp
            <img src="catimages/1sem/draw1.jpg" class="img-fluid"
            alt="">
             &nbsp&nbsp
             <img src="catimages/1sem/e1.jpg" class="img-fluid"
            alt="">
              &nbsp&nbsp
            <img src="catimages/1sem/math1.jpg" class="img-fluid"
            alt="">
              &nbsp&nbsp
               <img src="catimages/1sem/phy.jpg" class="img-fluid"
            alt="">
             &nbsp&nbsp
               <img src="catimages/1sem/work1.jpg" class="img-fluid"
            alt="">
         <!--  <a href="">
            <div class="mask rgba-white-light"></div>
          </a> -->
        </div>

      </div>
    </marquee>
     <marquee type="scroll" direction="right" >

       <div class="col-lg-2 col-md-12 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="catimages/1sem/c.jpg" class="img-fluid"
            alt="">
            &nbsp&nbsp
            <img src="catimages/1sem/draw1.jpg" class="img-fluid"
            alt="">
             &nbsp&nbsp
             <img src="catimages/1sem/e1.jpg" class="img-fluid"
            alt="">
              &nbsp&nbsp
            <img src="catimages/1sem/math1.jpg" class="img-fluid"
            alt="">
              &nbsp&nbsp
               <img src="catimages/1sem/phy.jpg" class="img-fluid"
            alt="">
             &nbsp&nbsp
               <img src="catimages/1sem/work1.jpg" class="img-fluid"
            alt="">
              <img src="catimages/1sem/c.jpg" class="img-fluid"
            alt="">
            &nbsp&nbsp
            <img src="catimages/1sem/draw1.jpg" class="img-fluid"
            alt="">
             &nbsp&nbsp
             <img src="catimages/1sem/e1.jpg" class="img-fluid"
            alt="">
              &nbsp&nbsp
            <img src="catimages/1sem/math1.jpg" class="img-fluid"
            alt="">
              &nbsp&nbsp
               <img src="catimages/1sem/phy.jpg" class="img-fluid"
            alt="">
             &nbsp&nbsp
               <img src="catimages/1sem/work1.jpg" class="img-fluid"
            alt="">
         <!--  <a href="">
            <div class="mask rgba-white-light"></div>
          </a> -->
        </div>

      </div>
    </marquee>


     <!--     <div class="view overlay z-depth-1-half">
          <img src="catimages/1sem/draw1.jpg" class="img-fluid"
            alt="">
        </div>

      </div>
     
      <div class="col-lg-2 col-md-6 mb-4">

        <div class="view overlay z-depth-1-half">
          <img src="catimages/1sem/e1.jpg" class="img-fluid"
            alt="">
      
        </div>

      </div>
    
      <div class="col-lg-2 col-md-12 mb-4">

              <div class="view overlay z-depth-1-half">
          <img src="catimages/1sem/math1.jpg" class="img-fluid"
            alt="">
         
        </div>

      </div>
    
      <div class="col-lg-2 col-md-6 mb-4">

        
        <div class="view overlay z-depth-1-half">
          <img src="catimages/1sem/phy.jpg" class="img-fluid"
            alt="">
       
        </div>

      </div>
     
      <div class="col-lg-2 col-md-6 mb-4">

     
        <div class="view overlay z-depth-1-half">
          <img src="catimages/1sem/work1.jpg" class="img-fluid"
            alt="">
         
        </div>

      </div> -->

    </div>
    <!-- Grid row -->
    <a href="gallery.php" style="text-decoration: none;color:grey;margin-left: 42%;" ><button type="button" class="btn btn-primary">View more>>></button></a>


  </div>
  <?php include('footer.php')?>

<!-- >>>>>>>>>>>>>>>>ending of gallery>>>>>>>>>>>>>>>>>>>>>>>>>>>> 
<!- >>>>>>>>>>>>>>>>>>>>>starting of footer<<<<<<< -->
		
<!-- >>>>>>>>>>>>>ending of footer>>>>>>>>>>>>>> -->




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>