 <?php include('header.php')?>
  <div class="view" style="background-image: url('images/7.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
  <div class="col d-flex justify-content-center"><div style="background-color: skyblue"; class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong style="color: red;">Sign up</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="#!">

            <div class="form-row" style="color: black;">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control">
                        <label for="materialRegisterFormFirstName">First name</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormLastName" class="form-control">
                        <label for="materialRegisterFormLastName">Last name</label>
                    </div>
                </div>
            </div>

            <!-- E-mail -->
            <div style="color: black;"class="md-form mt-0">
                <input type="email" id="materialRegisterFormEmail" class="form-control">
                <label for="materialRegisterFormEmail">E-mail</label>
            </div>

            <!-- Password -->
            <div style="color: black;" class="md-form">
                <input type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                <label for="materialRegisterFormPassword">Password</label>
                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                    At least 4 characters 
                </small>
            </div>

            <!-- Phone number -->
            <div style="color: black;"class="md-form">
                <input type="password" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                <label for="materialRegisterFormPhone">Phone number</label>
                <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                    Optional - for two step authentication
                </small>
            </div>

            <!-- Newsletter -->
            <div style="color: black;" class="form-check">
                <input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
                <label class="form-check-label" for="materialRegisterFormNewsletter">Subscribe to our newsletter</label>
            </div>

            <!-- Sign up button -->
            <button style="color: red;" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

            <!-- Social register -->
            <p style="color: black;">or sign up with:</p>

            <a type="button" class="btn-floating btn-fb btn-sm">
                <i style="color: black;"class="fab fa-facebook-f"></i>
            </a>
            <a type="button" class="btn-floating btn-tw btn-sm">
                <i style="color: black;" class="fab fa-twitter"></i>
            </a>
            <a type="button" class="btn-floating btn-li btn-sm">
                <i style="color: black;"class="fab fa-linkedin-in"></i>
            </a>
            <a type="button" class="btn-floating btn-git btn-sm">
                <i style="color: black;"class="fab fa-github"></i>
            </a>

            <hr>

            <!-- Terms of service -->
            <p style="color: black;">By clicking
                <em style="color: red;">Sign up</em> you agree to our
                <a style="color: black;"href="" target="_blank">terms of service</a>

        </form>
        <!-- Form -->

    </div>
</p></div>
</div>
 <?php include('footer.php')?>