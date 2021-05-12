<!-- <script>
  function math(){
    document.getElementById("math").style.display="block;"
  }
</script> -->
<?php
function component($productname,$productprice,$productimage){
	$element="   <div class=\"col-md-3 col-sm-6 my-3 my-md-0 c1\">
	 		<form action=\"\" method=\"post\">
				<div class=\"card shadow\">
					<div class=\"image\">
						<img src=\"$productimage\" alt=\"image1\" class=\"img-fluidcard-img-top my-3\" >
					</div>
					<div class=\"card-body\">
						<h5 class=\"card-title\">$productname</h5>
						<h6>
							<i class=\"fas fa-star\"></i>
							<i class=\"fas fa-star\"></i>
							<i class=\"fas fa-star\"></i>
							<i class=\"fas fa-star\"></i>
							<i class=\"far fa-star\"></i>
						</h6>
						<p> &raquo; broad content at low price<br>&nbsp; and know to use the different programs and features.</p>
						<h5>
							<small><del>रू599</del></small>
							<span class=\"price\">रू$productprice</span>
						</h5>
						<button type=\"submit\" name=\"add\" class=\"btn btn-primary my-3\">Add to Cart<i class=\"fas fa-shopping-cart\"></i>
					</div>
				</div>
			</form>   
		</div> ";
		echo $element;
}
?>



<?php include('header.php')  ?>
<style type="text/css">
	.card{
		background: #766c9b38;
	}
	.text2{
		font-family: Castellar;
		font-size: 30px;
		color: #6ab04c;
	}
	.text1{
		font-family: Copperplate Gothic Bold;
		color: blue;
	}
	.topic{
         text-align: center;
	}
    .c1{
    	padding-bottom: 5%;
    }
	.image{
	max-width: 100%;
	height: auto;
	background: radial-gradient(#fee391,#ffe1e7,#558fa1);
}
.fa-star,
.fa-star-half{
	color: #156800;
	padding: 3% 0;
}
h2{
	font-family: Colonna MT;
	color: #86095a;
	text-decoration: dotted underline;
}
.subject button a{
 color: white; 
 background-color: white;
 text-decoration: none;
}
.subject{
  top: 15%;
  position: fixed;
  margin-left: 1%;
  color: white;
}
.subject .i2 a div{
  width: 7em;
}
.subject button{
  display: block;
}
.subject .i2{
   display: none;
}
.subject:hover .i2{
  display: block;
}
.subject:hover button{
  display: none;
}
.subject:hover{
  top: 10%;
}
</style>

<div class="topic">
	<span class="text1">SEMESTER-I &raquo;</span>
	<span class="text2">COMPUTER engineering</span>
</div> 

<div class="subject">
      <button type="button" class="btn btn-link"  type="button"><i class="fas fa-angle-double-right"></i>QUICK</button>
      <div class="i2" id="#i2">
        <a href="#c1"><div class="btn btn-danger"> Math</div></a><br>
  <a href="#c2"><div type="button" class="btn btn-info">Physics</div></a><br>
  <a href="#c3"><div type="button" class="btn btn-warning">C-program</div></a><br>
  <a href="#c4"><div type="button" class="btn btn-success">English</div></a><br>
  <a href="#c5"><div type="button" class="btn btn-warning">Drawing</div></a><br>
  <a href="#c6"><div type="button" class="btn btn-danger"> Workshop</div></a><br>
  <a href="#c7"><div type="button" class="btn btn-primary">EDCT</div></a>
      </div>
</div>
<div class="container left">
	<h2 align="center" style="margin-top: 5%" id="c1">Mathematics book</h2>
	<div class="row text-center py-5">
            <?php 
              component("Engineering Mathematics(vol-1)",509,"catimages/1sem/math.jpg");
              component("Engineering Mathematics(vol-1)",510,"catimages/1sem/math1.jpg");
              component("Engineering Mathematics(vol-1)",515,"catimages/1sem/math2.jpg");
              component("Engineering Mathematics(vol-1)",520,"catimages/1sem/math3.jpg");
              component("Engineering Mathematics(vol-1)",509,"catimages/1sem/math4.jpg");
              component("Engineering Mathematics(vol-1)",510,"catimages/1sem/math5.png");
              component("Engineering Mathematics(vol-1)",520,"catimages/1sem/math6.png");
              component("Engineering Mathematics(vol-1)",509,"catimages/1sem/math7.jpg");
            ?>                    
    </div>
    <h2 align="center" id="c2">Physics book</h2>
	<div class="row text-center py-5">
            <?php 
              component("Engineering Physics",509,"catimages/1sem/phy.jpg");
              component("Engineering Physics",510,"catimages/1sem/phy1.jpg");
              component("Engineering Physics",515,"catimages/1sem/phy2.jpg");
              component("Engineering Physics",520,"catimages/1sem/phy3.jpg");
              component("Engineering Physics",509,"catimages/1sem/phy4.png");
              component("Engineering Physics",510,"catimages/1sem/phy5.jpg");
              component("Engineering Physics",520,"catimages/1sem/phy6.jpeg");
              component("Engineering Physics",509,"catimages/1sem/phy7.jpg");
            ?>                    
    </div>


    <h2 align="center" id="c3">C-Programming book</h2>
	<div class="row text-center py-5">
            <?php 
              component("C-Programming",509,"catimages/1sem/c1.jpg");
              component("C-Programming",510,"catimages/1sem/c2.jpg");
              component("C-Programming",515,"catimages/1sem/c4.jpg");
              component("C-Programming",520,"catimages/1sem/c.jpg");
              component("C-Programming",509,"catimages/1sem/c3.jpg");
              component("C-Programming",510,"catimages/1sem/c5.jpg");
              component("C-Programming",520,"catimages/1sem/c6.jpg");
              component("C-Programming",509,"catimages/1sem/c7.jpg");
            ?>                    
    </div>  

    <h2 align="center" id="c4">English book</h2>
	<div class="row text-center py-5">
            <?php 
              component("Communicative English",509,"catimages/1sem/e1.jpg");
              component("Communicative English",510,"catimages/1sem/e2.png");
              component("Communicative English",515,"catimages/1sem/e3.jpg");
              component("Communicative English",520,"catimages/1sem/e4.jpg");
              
            ?>                    
    </div>

    <h2 align="center" id="c5">Engineering Drawing book</h2>
	<div class="row text-center py-5">
            <?php 
              component("Engineering Drawing",509,"catimages/1sem/draw1.jpg");
              component("Engineering Drawing",510,"catimages/1sem/draw2.jpg");
              component("Engineering Drawing",515,"catimages/1sem/draw4.jpg");
              component("Engineering Drawing",520,"catimages/1sem/draw3.jpg");
              component("Engineering Drawing",509,"catimages/1sem/draw5.jpg");
              component("Engineering Drawing",510,"catimages/1sem/draw6.jpg");
              component("Engineering Drawing",515,"catimages/1sem/draw7.jpg");
              component("Engineering Drawing",520,"catimages/1sem/draw8.jpg");
            ?>                    
    </div> 

    <h2 align="center" id="c6">Workshop Technology book</h2>
  <div class="row text-center py-5">
            <?php 
              component("Workshop Technology",509,"catimages/1sem/work1.jpg");
              component("Workshop Technology",510,"catimages/1sem/work2.jpeg");
              component("Workshop Technology",515,"catimages/1sem/work3.jpg");
              component("Workshop Technology",520,"catimages/1sem/work4.jpg");
              component("Workshop Technology",509,"catimages/1sem/work5.jpeg");
              component("Workshop Technology",510,"catimages/1sem/work6.jpeg");
              component("Workshop Technology",515,"catimages/1sem/work7.jpg");
              component("Workshop Technology",520,"catimages/1sem/work8.jpg");
            ?>                    
    </div> 
      
</div>    
<?php include('footer.php') ?>