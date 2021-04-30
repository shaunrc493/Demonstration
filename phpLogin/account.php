<?php 

	session_start();

	if (isset($_SESSION['username'])){
		header("location:dashboard.php");
	}
	
	if (!empty($_GET['error'])){
		if($_GET['error'] == "cnfP0"){
			$error1 = "Passwords do not match, try again";
		}
		if($_GET['error'] == "tac0"){
			$error2 = "Please read the Terms and Conditions";
		}
	}

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Account</title>
  </head>
  <body>
    

<!-- Start Nav bar-->
  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">PHP Login</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarText">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Features</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Pricing</a>
	      </li>
	    </ul>
	    <span class="navbar-text">
	      Navbar text with an inline element
	    </span>
	  </div>
	</nav>
<!--End Nav bar-->
<hr style="border: rgba(0,0,0,0);">
<!--Start Container-->
	<div class="container">
<!--Start Login-->
	<div class="container" style="border-radius: 25px; background-color: #eee; padding: 20px 30px 20px 30px">
		<h1 class="text-center">Login to your Account</h1>

		<form action="login.php" method="POST">
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="loginUsername">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="loginPassword">
			</div>
			<button type="submit" class="btn btn-block btn-success">Login</button>
		</form>
	</div>
<!--End Login-->
<hr style="border: rgba(0,0,0,0);">
	<h4 class="text-center">Don't have an account? Why not register now!</h4>
<hr style="border: rgba(0,0,0,0);">
<!--Start Register-->
	<div class="container" style="border-radius: 25px; background-color: #eee; padding: 20px 30px 20px 30px">
		<h1 class="text-center">Register a new Account</h1>

		<form action="register.php" method="POST">
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="regUsername">
			</div>
			<div class="form-group">
				<label>Email Address</label>
				<input type="text" class="form-control" name="regEmail">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="regPassword">
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" class="form-control" name="regConfirm">
				<?php if(isset($error1)){ echo "<p style='background-color:red'>".$error1."</p>";} ?>
			</div>
			<div class="form-group text-center">
				<input type="checkbox" class="form-check-input" name="regCheck" required>
    			<label class="form-check-label">I confirm I have read the <a href="#">terms and conditions</a>.</label>
    			<?php if(isset($error2)){ echo "<p style='background-color:red'>".$error2."</p>";} ?>
			</div>
			<button type="submit" class="btn btn-block btn-success">Login</button>
		</form>
	</div>
<!--End Register-->
<hr style="border: rgba(0,0,0,0);">
	</div>
<!--End Container-->
<!--Start Footer-->
	<div style="width: 100%; height: 200px;background-color: #333">
		<div class="container" style="color: #eee">
			<hr style="border: rgba(0,0,0,0);">
			<h4 class="text-center">Footer</h4>
			<hr style="border: rgba(0,0,0,0);">
			<div class="row">
				<div class="col col-xl-3">
					<ul>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
					</ul>
				</div>
				<div class="col col-xl-3">
					<ul>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
					</ul>
				</div>
				<div class="col col-xl-3">
					<ul>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
					</ul>
				</div>
			</div>
			<h4 class="text-center">PHP Login copywrite 2018-<?php echo date("Y"); ?></h4>
		</div>
	</div>
<!--End Footer-->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>