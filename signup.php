<?php include 'header1.php'; ?> 

  <main id="main">
  
    <form class="form-horizontal" method="POST" action="signupprocess.php">
<br><br>
      <div id="login-box">
        <div class="left">
          <h1>Sign up</h1>
    
          <input type="text" name="username" placeholder="Username" required="" />
          <input type="email" name="email" placeholder="E-mail" required/>
          <input type="password" name="password" placeholder="Password" required/>
          <input type="password" name="password2" placeholder="Retype password" required/>
          <input type="submit" name="signup_submit" value="Sign me up" required/>

          


      </div>

    </form>

  </main><!-- End #main -->

<?php include 'footer1.php'; ?> 