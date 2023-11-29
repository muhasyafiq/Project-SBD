<?php
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["user_id"])){
  $userId = $_SESSION["user_id"];
  header("location: index.php");
  exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link rel="stylesheet" href="css/login.style.css">
    <title>Order</title>
</head>
<body>
	<div class="container">
		<div class="sign-in-wrapper">
			<form action="includes/order.inc.php" method="post">
				<h1>Order</h1>
				    <div class="input-group">
              <input type="text" name="username" placeholder="Username">
              <input type="text" name="package_name" placeholder="Package Name">
              <input type="text" name="package_type" placeholder="Package Type">
			        <input type="text" name="amount" placeholder="Amount">
			        <input type="text" name="note" placeholder="Note">
					    <button>Place Order</button>
				    </div>
				</form>
				<?php
   					check_login_errors();
    			?>
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
						<button id="signup" class="overlay-btn">Sign up</button>
					</div>
			</div>
	</div>

	<script src="js/main.js"></script>
</body>
</html>