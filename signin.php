<div class="bg">
<?php include 'header.php';?>

<!-- login starts here -->
  <div class="container-fluid">
      <div class="row ">
        
        <div class="col-md-offset-4 col-md-4 top-gap">
          <div class="login-form">
           <div class="login-title text-center">
                  <h4><strong>Login Form</strong></h4>
                </div>
              <div class="main-login main-center" id="loginform">
               
          <form class="form-horizontal" method="post" action="#">
            

            <div class="form-group">
              <label for="email" class="cols-sm-2 control-label"><strong>Your Email</strong></label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                </div>
              </div>
            </div>


            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label"><strong>Password</strong> </label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                </div>
              </div>
            </div>

            <div class="form-group ">
              <button type="button" class="btn btn-primary btn-lg btn-block login-button">Login</button>
            </div>
            <div class="login-register text-left">
                    <a href="#">forget your password ?</a>
                 </div><br>
                 <div class="login-register text-left">
                    <a href="signup.php">Create new account</a>
                 </div>
          </form>
        </div>
      </div> 
    </div>
    </div>
  	</div>
 

	

<?php include 'footer.php';?>
</div>