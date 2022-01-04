<?php include 'header1.php'; ?> 


  <main id="main">
  <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-center form_container">
          <h2>Log In</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

  <form class="d-flex justify-content-center form_container" method="POST" action="signinprocess.php">
    <fieldset>
       <div class="fadeIn first">
      <img src="img/logo.jpg" id="icon" alt="User Icon" />
    </div>

      <div class="wrapper fadeInDown">
        <label for="inputIC" class="col-lg-2 control-label">Username</label>
        <div class="col-lg-10">
          <input type="text" name="fusername" class="form-control" id="inputUsername" placeholder="Username"required>
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-lg-2 control-label">Password</label>
        <div class="col-lg-10">
          <input type="password" name="fpwd" class="form-control" id="inputPassword" placeholder="password" required>
        </div>
      </div>

        
              
     
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <button type="submit" class="btn btn-primary">Log in</button>
          <button type="reset" class="btn btn-warning">Clear</button>
        </div>
      </div>

        <br>
       <div >
          Don't have an account?<a href="signup.php">Sign Up</a>
        </div>
        <div >
          <a href="forgetpassword.php">Forgot your password?</a>
        </div>
    </fieldset>
  </form>




    
       

  </main><!-- End #main -->

<?php include 'footer1.php'; ?> 