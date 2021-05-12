<?php include('header.php')?>
<style type="text/css">
	.row{
		margin-top: 10px;
	}
	.text2{
		font-size: 30px;
		color: #6ab04c;
	}
	.topic{
         text-align: center;
	}
	.details .describe{
	display: none;
}
.panel:hover .details .describe{
	display: block;
}
*{
	margin: 0px;
	padding: 0px;

}
/*.details{
	border: solid red;
	height: 42px;
	overflow: hidden;
}	
.panel:hover .details{
  height: 200px;

}*/
 .details h2{
	font-size: 18px;
	text-transform: capitalize;
	margin: 0 0 10px 0;
}
.product .details h2 span {
     font-size: 14px;
     color: black;

}
.details .join{
	position: relative;
}
.details .price{
	position: absolute;
	top: 0px;
	right: 0px;
	color: red;
	font-weight: bold;
	font-size: 20px;
}
.product .details p{
	color: #252525;
	font-size: 12px;
}
</style>
<div class="topic">
	<span class="text1">SEMESTER-I &raquo;</span>
	<span class="text2">COMPUTER engineering</span>
</div>
<div class="row">
    
      <div class="col-md-4">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">PRODUCT1</h3>
        </div>
        <div class="panel-body">
          <img src="images/book/p1.png" class="thumbnail img-responsive" style="margin-left: 15%">
	<div class="details">
		    <div class="join">
		    	<h2 >brand name<br><span>sort title</span></h2>
		        <div class="price">$50.80</div>
		    </div>
		    <div class="describe">
		    	<label>Description</label>
		        <p>Microsoft Office 2000 Complete is a one–of–a–kind computer book –– valuable both for its broad content and its low price. This book contains the essentials you need to know to use the different programs and features included with Office 2000.</p>
            </div>
	</div>
						      

        </div>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">PRODUCT1</h3>
        </div>
        <div class="panel-body">
          <img src="images/book/p2.png" class="thumbnail img-responsive">
	<div class="details">
		    <div class="join">
		    	<h2 >brand name<br><span>sort title</span></h2>
		        <div class="price">$50.80</div>
		    </div>
		    <div class="describe">
		    	<label>Description</label>
		        <p>Microsoft Office 2000 Complete is a one–of–a–kind computer book –– valuable both for its broad content and its low price. This book contains the essentials you need to know to use the different programs and features included with Office 2000.</p>
            </div>
	</div>
						      
        </div>
      </div>
    </div>
</div>
<?php include('footer.php')?>