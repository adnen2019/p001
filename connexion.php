
<div class="row connexion">
<div class="col-lg-2 col-md-1 "></div>
<div class="col-lg-8 col-md-10 col-sm-12 col-xs-12">

<!-- Default form login -->
<form class="text-center border border-light p-5" action="index.php" method="POST">

    <p class="h4 mb-4">Sign in</p>

    <!-- Email -->
    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="email1">

    <!-- Password -->
    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="mdp1">

    <div class="d-flex justify-content-around">
        <div>
            <!-- Remember me -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
            </div>
        </div>
        <div>
            <!-- Forgot password -->
            <a href="">Forgot password?</a>
        </div>
    </div>

    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="button" id="signin" name="signin" onclick="connVerif()">Sign in</button>

    <!-- Register -->
    <p>Not a member?
        <a  href="inscription.php#inscri">Register</a>
    </p>

   
  

</form>
</div>
<!-- Default form login -->
<div class="col-lg-2 col-md-1 "></div></div>
