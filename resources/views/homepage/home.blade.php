
<!DOCTYPE html>
<html lang="en">
  <head>
  
    <title> Health Care Management System
    </title>
    
 <link href="public/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
 <link href="public/assets/bootstrap.min.css" rel="stylesheet">
 <link href="public/assets/bootstrap.min.js" rel="stylesheet">
    
  </head>
  <body>
      <div class="container" style="padding-top: 10px;">
        <nav class="navbar  navbar-static-top">
          <a class="navbar-brand">🌅 Health Care Management System</a>
            <ul class="nav nav-pills">
              <li class="nav-item">
              </li>
              <li class="nav-item">
                <a class="" href="tel:+917709473553">Ambulance Number: +255717336669</a>
              </li>
              <?php
                if (isset($_SESSION['username'])) {
                    echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link" href="logout.php">Logout</a>
                  </li>';
                }
              ?>
            </ul>
        </nav>
        </div>
<div class="container">
 	<h1>Welcome to  Health Care Management System</h1>
    <p class="block-quote">Our aim has always been to bring world–class medical care with highest accessibility and simplicity.</p>

<div class="row">
  <div class="col col-xl-6 col-sm-6">
      <h2>Login</h2>
      <form action="" method="POST">
        <div class="form-group">
          <label for="usr">Email:</label>
          <input type="email" class="form-control" name="lemail" required>
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" name="lpassword" required>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Login">
          <input type="reset" class="btn btn-danger">
        </div>
          
      </form>
  </div>
          
  <div class="col col-xl-6 col-sm-6" id="register1">
    <form method="post" action="index.php">
	    <h2>Registration</h2>
	      <div class="form-group">
	        <label for="usr">Full Name:</label>
	        <input type="text" class="form-control" name="rfullname" required>
	      </div>
        
        <div class="form-group">
	        <label for="usr">Email:</label>
	        <input type="email" class="form-control" name="remail" required>
	      </div>
	          
        <div class="form-group">
	        <label for="pwd">Password:</label>
	        <input type="password" class="form-control"  name="rpassword" required>
	      </div>

	      <div class="form-group">
	        <input type="submit" class="btn btn-primary">
	        <input type="reset" class="btn btn-danger"></button>
	      </div>
    </form>
  </div>
</div>
</div>
    <div class="container footer">
      <hr>
      <footer>
        <p align="right">
        <?php
                if (!isset($_SESSION['username'])) {
                    echo '<a class="nav-link" href="resources/views/staff/hms-staff">Staff Login</a>
                  </li>';
                }
        ?>
        </p>
        <p align="right">
        Made and managed by babarich - <?php echo date('Y'); ?>
        </nav>
		</p>
      </footer>
    </div>
  </body>
</html>
