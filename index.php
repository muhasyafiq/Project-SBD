<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';

if(isset($_SESSION["user_id"])){
    $userId = $_SESSION["user_id"];
    header("location: dashboard.php");
    exit;
}?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link rel="stylesheet" href="css/login.style.css">
    <title>Login</title>
</head>
<body>
	<div class="container">
  		<div class="sign-up-wrapper">
      <form action="includes/signup.inc.php" method="post">
        <h1>Create Account</h1>
				<div class="social">
					<div><a href="#"><i class="fa-brands fa-facebook"></i></a></div>
					<div><a href="#"><i class="fa-brands fa-x-twitter"></i></a></div>
					<div><a href="#"><i class="fa-brands fa-linkedin"></i></a></div>
				</div>
				<div class="input-group">
					<?php
            signup_input();
          ?>
					<button>Sign Up</button>
				</div>
      </form>
		</div>
		<div class="sign-in-wrapper">
				<form action="includes/login.inc.php" method="post">
					<h1>Sign In</h1>
					<?php
   					check_login_errors();
    				?>
						<div class="social">
							<div><a href="#"><i class="fa-brands fa-facebook"></i></a></div>
							<div><a href="#"><i class="fa-brands fa-x-twitter"></i></a></div>
							<div><a href="#"><i class="fa-brands fa-linkedin"></i></a></div>
						</div>
						<div class="input-group">
							<input type="text" name="username" placeholder="Username" autocomplete="off">
							<input type="password" name="pwd" placeholder="Password" autocomplete="off">
							<a href="#">Forgot your password ?</a>
							<button>Sign In</button>
						</div>
				</form>
		</div>
		<div class="overlay">
					<div class="overlay-left">
						<h1>Welcome Back</h1>
						<p>To keep connected with us please login with your personal info.</p>
						<button id="signin" class="overlay-btn">Sign in</button>
					</div>
					<div class="overlay-right">
						<h1>Hello, Friend</h1>
						<p>Enter your personal details and start journey with us.</p>
						<?php
    						check_signup_errors();
    					?>
						<button id="signup" class="overlay-btn">Sign up</button>
					</div>
		</div>
	</div>

	<script src="js/main.js"></script>
</body>
</html>