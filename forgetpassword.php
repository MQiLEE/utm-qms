<?php include 'header1.php'; ?> 

<main>
	
	  <section class="breadcrumbs">
      <div class="container pt-3">

        <div class="d-flex justify-content-center form_container">
          <h2>Forgot Password</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<div class="container pt-5 pb-5">
	    <div class="row justify-content-center">
	        <div class="col-lg-8 col-md-8 ">
	            <div class="forgot">
	                <h2>Forgot your password?</h2>
	                <p>Change your password in three easy steps. This will help you to secure your password!</p>
	                <ol class="list-unstyled">
	                    <li><span class="text-primary text-medium">1. </span>Enter your email address below.</li>
	                    <li><span class="text-primary text-medium">2. </span>Our system will send you a temporary link</li>
	                    <li><span class="text-primary text-medium">3. </span>Use the link to reset your password</li>
	                </ol>
	            </div>
	            <form class="card mt-4">
	                <div class="card-body">
	                    <div class="form-group"> <label for="email-for-pass">Enter your email address</label> <input  class="form-control" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" placeholder="Email" ><small>Enter the email address you used during the registration on BBBootstrap.com. Then we'll email a link to this address.</small> </div>
	                </div>
	                <div class="card-footer"> <button class="btn btn-success" type="submit">Get New Password</button> <button class="btn btn-danger" type="submit" onclick="document.location='signin.php'">Back to Login</button> </div>
	            </form>
	        </div>
	    </div>
	</div></main>
	<?php include 'footer1.php'; ?> 