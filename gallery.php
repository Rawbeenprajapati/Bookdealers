<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="images/logo.png">
  <title>Sajha Book Thela-Gallery</title>
</head>
<body>
   <?php 
    // session_start();
    // session_destroy();
    ?>


<?php
   
   function gall($gallery,$writer,$edition)
   {
    $element="
          <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12 b\">
                 <div class=\"hovereffect\">
                  <img class=\"img-responsive img-fluid\" src=\"$gallery\" alt=\"\">
            <div class=\"overlay\">
                <h6 style=\" font-size: 1.6rem;\">$writer<br>$edition</h6>
                </div>
                 </div>
</div>
    ";
    echo $element;
   }
?>
    <?php include('header.php')?>
<style> 
.hovereffect {
    perspective: 1000px;
  position: relative;
  margin-top:10px;
}
.b{margin-bottom: 5%;}
.hovereffect img{
    width: 100%;
    height: auto;
    transform: rotateY(0);
    transition: all 0.5s ease-in-out 0s;
}
.hovereffect:hover img{
    transform: rotateY(-90deg);
}

.overlay{
    width: 100%;
    height: 100%;
    position: absolute; 
    top: 0;
    left: 0;
    padding: 60px 20px;
    background:-webkit-radial-gradient(center, ellipse cover, #ff6666 0%, #999966 100%);
    box-sizing: border-box;
    font-family: lucida calligraphy;
    text-align: center;
    color: #fff;
    background-color:rgba(0,0,0,0.7);
    transform: rotateY(90deg); 
    transition: all 0.5s ease-in-out 0s;
    font-family: Vivaldi;

}
.hovereffect:hover .overlay{
   transform: rotateY(0deg);
}
</style>

<section> 
    	<div class="container">
    		<div>
    			<h2 style="color:black;font-family:Vivaldi;font-size: 40px;  text-shadow: 2px 2px #FF0000;text-align: center;text-transform: uppercase;margin-top: 50px;"><b>Our gallery</b></h2>
    		</div>
    		<div class="row">
                <?php
                  gall("gimages/10th.jpg","Ian Sommerville","10th");
                  gall("gimages/book13.jpg","K.M Gupta","1st");
                  gall("gimages/c.jpg","R.Chopra","5th");
                  gall("gimages/c1.jpg","E.Balagurusammy","2nd");
                  gall("gimages/c2.jpg","Yashavant Kanetkar","16th");
                  gall("gimages/elex.jpg","J.B Gupta","6th");
                  gall("gimages/letusc++.jpg","Yashavant Kanetkar","2nd");
                  gall("gimages/maths.jpg","H.K Das, Dr.Rama Verma","-");
                  gall("gimages/micro.jpg","Ramesh Gaonkar","5th");
                  gall("gimages/micro1.jpg","Ramesh Gaonkar","6th");
                  gall("gimages/my.png","Dr.K.K Jha, Dr. Vaishali Dixit","-");
                  gall("gimages/physics.jpg","Dr.M.N.Avadhanulu & so on","-");
                  gall("gimages/physics1.jpg","Dr.M.N.Avadhanulu & so on","-");
                  gall("gimages/physics3.jpg","Manoj K.Harbola & so on","-");
                  gall("gimages/physics4.jpg","Sanjay D Jain, Girish G Sahasrabudhe","2nd");
                  gall("gimages/web4.jpg","-","-");
                  gall("gimages/maths1.jpg","S.S.Sastry","4th");
                  gall("gimages/nm.jpg","Dr. B.S.Grewal","-");
                  gall("gimages/nm1.jpg","E.Balagurusammy","-");
                  gall("gimages/os.jpg","Rajiv Chopra","4th");
                  gall("gimages/sys.jpg","Wiley","7th");
                ?>  
    			
    		</div>
    	</div>
    </section>

<?php include('footer.php')?>
</body>
</html>