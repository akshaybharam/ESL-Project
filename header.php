<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

    <!-- Website Font style -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <div class="navbar-collapse collapse" id="back">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="home.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>      
        </div><!--=======.nav collapse========-->
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <?php 
            if(!empty($_SESSION['username']))
            {
                session_start();  
                //unset($_SESSION['username']);
                echo '<li class="dropdown" style="color:white"><a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$_SESSION['username'].'<b              class="caret"></b></a>';
                echo '<ul class="dropdown-menu">
                        <li><a href="#">
                          <span class="glyphicon glyphicon-user"></span>Profile</a></li>
                        <li><a href="#">
                          <span class="glyphicon glyphicon-cog"></span>Settings</a></li>
                        <li><a href="logout.php">
                          <span class="glyphicon glyphicon-off"></span>Log Out</a></li>
                    </ul>
                    </li>';
            }
            else{
            
                echo '<li><a href="#login" data-toggle="modal">Log In</a></li>
                    <li><a href="signup.php">Sign Up</a></li>';
                //echo '</ul>';
            
            }
            ?>  
            </ul> 
        </div>
    </div>

	


<!-- ================Fixed Footer============== -->
    <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
        <div class="navbar-text pull-left">
        	<p>www.learnandearn@gmail.com</p>
        </div> 
    </div>

    <!-- Bootstrap core Javascript
    =========================================== -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <div class="modal fade text-center" id="login" role="dialog">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<form class="form-horizontal" action="login.php" role="form" method="POST">		
    				<div class="modal-header">
    					<h3>Log In</h3>
    				</div>
    				<div class="modal-body">
    					<div class="login_form">
    						<div class="login_form">
    						  <div class="input-group">
                    			<span class="input-group-addon">
                      				<i class="glyphicon glyphicon-user"></i>
                    			</span> 
                    			<input class="form-control" placeholder="Username" name="username" type="text" required>
                  			  </div><br>

                  			  <div class="input-group">
                    			<span class="input-group-addon">
                      				<i class="glyphicon glyphicon-lock"></i> 
                    			</span>
                    			<input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                  			  </div>
    						
                 				<input type="checkbox" checked="checked"> Remember me <br>
    						</div>
    					</div>
    				</div>
    				
    				<div class="modal-footer">
    					<a class="btn btn-danger" data-dismiss="modal">Close</a>
    					<button type="submit" name="Login" class="btn btn-primary">Log In</button>
    				</div>
    			</form>
    		</div>
    	</div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
