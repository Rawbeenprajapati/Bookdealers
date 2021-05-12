  <!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="images/logo.png">
  <title>Let sell some books-SBT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Fill up the forms:</b></h2></center></legend><br>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">First name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-text-color"></i></span>
  <input name="fname" placeholder="first name" class="form-control"  type="text">
    </div>
  </div>
</div>
<!-- /////////////////////// -->
<div class="form-group">
  <label class="col-md-4 control-label">Last name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-text-color"></i></span>
  <input name="lname" placeholder="last name" class="form-control"  type="text">
    </div>
  </div>
</div>
<!-- ////////////////////////////////////////// -->
 <div class="form-group"> 
  <label class="col-md-4 control-label">District</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="district" class="form-control selectpicker">
      <option value="">Select the district</option>
      <option>Kathmandu</option>
      <option>Bhakatpur</option>
      <option >Lalitpur</option>
    </select>
  </div>
</div>

</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Permanent Address</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-text-color"></i></span>
  <input name="paddress" placeholder="permanent address" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Temporary Address</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
  <input name="taddress" placeholder="temporary address" class="form-control"  type="text">
    </div>
  </div>
</div>
<!-- //////////////////////////////////////////////// -->
<div class="form-group">
  <label class="col-md-4 control-label">ID type</label> 
    <div class="col-md-4 inputGroupContainer">
<div class="form-check">
  <label class="form-check-label" for="radio1">
    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked><span style="margin-left:20%;">Citizenship</span>
  </label>
</div>
<div class="form-check">
  <label class="form-check-label" for="radio2">
    <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2" ><span style="margin-left:35%;">license</span>
  </label>
</div>
<div class="form-check">
  <label class="form-check-label" for="radio3">
    <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option3"><span style="margin-left:25%;">Passport</span>
  </label>
</div>
</div>
</div>
<!--  <div class="form-group">
  <label class="col-md-4 control-label">ID TYPE</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-text-color"></i></span>
  <input name="publication" placeholder="id" class="form-control"  type="checkbox">
  <input name="publication" placeholder="id" class="form-control"  type="checkbox">
  <input name="publication" placeholder="id" class="form-control"  type="checkbox">
    </div>
  </div>
</div> -->
<!-- ////////////////////////////////////////////////////// -->
  <div class="form-group">
  <label class="col-md-4 control-label" >ID NO</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-text-color"></i></span>
  <input name="publication" placeholder="id" class="form-control"  type="number">
    </div>
  </div>
</div>
<!-- ///////////////////////////////////////////////////// -->
<!--  <div class="form-group"> 
  <label class="col-md-4 control-label">Edition</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="semester" class="form-control selectpicker">
      <option value="">Select the edition year</option>
      <option>2013</option>
      <option>2014</option>
      <option >2015</option>
      <option >2016</option>
      <option >2017</option>
      <option >2018</option>
      <option >2019</option>
      <option >2020</option>
    </select>
  </div>
</div>
</div> -->
<!-- ////////////////////////////////////// -->
<!--  <div class="form-group"> 
  <label class="col-md-4 control-label">Condition</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="semester" class="form-control selectpicker">
      <!-- <option value="">Select your book condition</option> -->
  <!--     <option>New</option>
      <option>Old</option>
    </select>
  </div>
</div>
</div> -->
<!-- ????????????????????? -->
 <!--  <div class="form-group">
  <label class="col-md-4 control-label" >Marked price</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-rub"></i></span>
  <input name="price" placeholder="price" class="form-control"  type="number">
    </div>
  </div>
</div> -->
  -->
  
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Username</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="user_name" placeholder="Username" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="user_password" placeholder="Password" class="form-control"  type="password">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Confirm Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Contact No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="contact_no" placeholder="+977" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
  </body>
  </html>