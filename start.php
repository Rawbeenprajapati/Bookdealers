<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="icon" href="images/logo.png">
  <title>Sajha Book Thela(Getting started...)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  .carousel-item {
    height: 695px;
  }
  .titles{
    /*border: 2px solid black;*/
    background-color: grey;
    border-radius:5px;
    width:60%;
    margin-left: 20%;
  }
  .titles:hover{
    background-color: linear-gradient(to left,grey,blue);
    border-radius:5px;
    width:60%;
    margin-left: 20%;
    border-top:1px solid black;
    border-bottom:1px solid black;

  }
  
  </style>
</head>
<body>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slide1.jpg" alt="first second" width="100%" height="100%">
      <div class="carousel-caption">
         <button type="button" class="btn btn-secondary">Sajha book thela</button>
     <!--    <div class="titles">
        <h3 style="font-family: Courier;">Welcome to sajha book thela</h3>
      </div> -->
        <!-- <p style="font-family: Garamond;color:black;font-size:22px;">Books you can't put down are much easier to find when we can actually pick them up</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/slide2.jpg" alt="second slide" width="100%" height="100%" >
       <div class="carousel-caption">
<!--         <div class="titles">
        <h3 style="font-family: Courier;">Sajha Book Thela provides a variety of books for purchase throughout the Nepal where different customer can have widest choice of books</h3>
  
        <p style="font-family: Garamond;color:white;font-size:22px;">Sajha Book Thela provides a variety of books for purchase throughout the Nepal where different customer can have widest choice of books.</p>
</div> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/slide7.jpg" alt="third slide" width="100%" height="100%">
      <div class="carousel-caption">
        <a href="index.php">
          <button type="button" class="btn btn-primary">Get started</button>
      </a>
      </div>

    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
     <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
      <span class="carousel-control-next-icon"></span>
  </a>
</div>

</body>
</html>