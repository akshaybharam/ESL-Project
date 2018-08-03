<title>Sign Up</title>
<?php
  include("header.php");
?>
    <div class="container text-center">
      <div class="row text-center">
        <div class="panel panel-default">
          <div class="panel-heading">
            <strong><font size="4"> Sign In</strong></font>
          </div>
          <div class="panel-body">
            <form role="form" action="datab.php" method="POST">
              <fieldset>
                <div class="row">
                  <div class="center-block">
                    <img class="profile-img" src="images/login.png" alt="">
                  </div>
                </div><br>

                <div class="row">
                  <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"></i>
                        </span> 
                        <input class="form-control" placeholder="Full Name" name="user_name" type="text" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"></i>
                        </span> 
                        <input class="form-control" placeholder="Gender" name="user_gender" type="text" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"></i>
                        </span> 
                        <input class="form-control" placeholder="Date Of Birth" name="user_dob" type="text" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-home"></i>
                        </span> 
                        <input class="form-control" placeholder="Local Address" name="user_address" type="text" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-envelope"></i>
                        </span> 
                        <input class="form-control" placeholder="@gmail.com" name="user_email" type="text" required>
                      </div>
                    </div>                    

                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-earphone"></i>
                        </span> 
                        <input class="form-control" placeholder="Mobile No." name="user_mobileno" type="text" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-search"></i>
                        </span> 
                        <input class="form-control" placeholder="Enter Course" name="user_coursename" type="text" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"></i>
                        </span> 
                        <input class="form-control" placeholder="Username" name="username" type="text" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-lock"></i>
                        </span>
                        <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
                    </div>
                    
                  </div>
                </div>
              </fieldset>
            </form><!--Form closed-->
        </div><!--Panel closed-->
      </div> <!--row closed-->
    </div> <!--continer closed-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>