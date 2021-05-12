 <?php include('header.php')?>

<!-- Material form login -->
 <div class="view" style="background-image: url('images/7.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
  <div class="col d-flex justify-content-center"><div style="background-color: skyblue"; class="card">

<!--   /*<div style="background-color: skyblue;margin:2% 35%;" class="card ">*/
 -->

<!-- <div style="margin-left:35%;margin-right:35%;background-color: skyblue;" class="card">
 -->
  <h5 class="card-header info-color white-text text-center py-4">
    <strong style="color: red;">Log in</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
        <form class="text-center" style="color: black;" action="#!">

<!--     <form class="text-center" style="color: #757575;" action="#!">
 -->
      <!-- Email -->
      <div class="md-form">
        <input type="email" id="materialLoginFormEmail" class="form-control">
        <label for="materialLoginFormEmail">E-mail</label>
      </div>

      <!-- Password -->
      <div class="md-form">
        <input type="password" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">Password</label>
      </div>

      <div class="d-flex justify-content-around">
        <div>
          <!-- Remember me -->
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
            <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
          </div>
        </div>
        <div>
          <!-- Forgot password -->
          <a style="color: red;"  href="">Forgot password?</a>
        </div>
      </div>
      

      <!-- Sign in button -->
      <button style="color: white;" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Log in</button>

      <!-- Register -->
      <p style="color: black;">Not a member?
        <a style="color: red;"  href="signin.php">Register</a>
      </p>

      <!-- Social login -->
      <p style="color: black;">or sign in with:</p>
      <a type="button" class="btn-floating btn-fb btn-sm">
        <i style="color: black;" class="fab fa-facebook-f"></i>
      </a>
      <a type="button" class="btn-floating btn-tw btn-sm">
        <i style="color: black;"class="fab fa-twitter"></i>
      </a>
      <a type="button" class="btn-floating btn-li btn-sm">
        <i style="color: black;" class="fab fa-linkedin-in"></i>
      </a>
      <a type="button" class="btn-floating btn-git btn-sm">
        <i style="color: black;"class="fab fa-github"></i>
      </a>

    </form>
    <!-- Form -->
</div>
</div>
</div>

 <?php include('footer.php')?>
