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
    height: 100%;
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
  .container{
    height:500px;
 background-image:
    linear-gradient(
      to right, 
      grey,
      #fffdc2 15%,
      #d7f0a2 15%,
      #d7f0a2 85%,
      grey 85%
    ); 
     }
     input[type="button"]
     {
      margin-left: 60%;
      /*margin-top:10%;*/
      background-color: green;
      border-radius: 15%;
      border:1px solid black;
     }
        input[type="button"]:hover
     {
      margin-left: 60%;
      /*margin-top:10%;*/
      background-color: aqua;
      border-radius: 15%;
      border:1px solid black;
      color:white;
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
         <section>
        <div class="container border border-left-0 border-info p-5 mt-5 shadow-lg bg-white">
            <div class="row gap">
                <div class="col-md-6"  >
                    <h2 class="green">How Does Selling Work?</h2>
                <p>Sajha Book Thela is happy to buy back textbooks you no longer need. Enter the ISBN or title of the textbook you want to sell in the “Sell” search bar. You’ll see a copy of the textbook and how much we’re offering for it.</p>
                <p>If you're happy with the price, click “Add to cart” and complete the process. We’ll then give you a shipping label to print out (we pay for shipping so you don’t have to) and you send us the textbook. In 4-14 days we receive it, and you get paid when we recieve and approve it, your choice.</p>
                </div>
     <!--            <div class="col-md-6 m ">
 <img src="images/sell.png" style="height: 400px;width: 400px;float: right;margin-top: -20%;" alt="selling process diagram" />                </div>
            </div> -->
        </div>
    </section>
     
    </div>

    <div class="carousel-item">
      <section>
        <div class="container border border-left-0 border-info p-5 mt-5 shadow-lg bg-white">
            <div class="row gap">
                <div class="col-md-6" >
                    <h2 class="green">Resaleable</h2>
               <p>(Like New, Good Used, and Acceptable conditions) books with minor to no signs of wear and tear. This can include staining, discoloration, writing, highlighting, markings, tears, and other general damage from use. All pages must be included and all text legible. SBT pays the same amount for used and unused books in Like New–Acceptable condition.<br /><br /><b>You will receive the quoted amount.</b></p>
                </div>
          <!--       <div class="col-md-6 m ">
 <img style="height: 500px;width: 300px;float: right;margin-top: -20%;"   src="images/resalable_icon_small.svg"  />                </div>
            </div> -->
        </div>
    </section>      
    </div>
    <div class="carousel-item">
          <section>
        <div class="container border border-left-0 border-info p-5 mt-5 shadow-lg bg-white">
            <div class="row gap">
                <div class="col-md-6">
                    <h2 class="green">Non-resaleable</h2>
                <p>Books that have excessive writing, highlighting, or other markings on over 75% of the pages; cover damage greater than a 2"x2" section; numerous torn pages; excessive odor; mold; obscured text or illegible text; or severe staining covering more than a 1/3 of the page and spanning more than 1/3 of the book; missing pages or stuck-together pages; or books that are deemed inauthentic or a replica.<br /><br /></p>
                <a href="sellregis.php">

                 <input type="button" name="Get Started" value="Get Started">
               </a>

                </div>
   <!--              <div class="col-md-6 m ">
 <img style="height: 500px;width: 300px;float: right;margin-top: -20%;"   src="images/non-resalable_small_icon.svg"  />                </div>
            </div> -->
        </div>

    </section>
     
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev" >
    <span class="carousel-control-prev-icon bg-black" style="margin-left:20%;"></span>
     
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" >
    <span class="carousel-control-next-icon" style="margin-left: -20%;"></span>
      
  </a>
</div>

</body>
</html>