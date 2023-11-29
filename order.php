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
			</div>
			<div class="overlay">
					
					<div class="overlay-right">
						<h1>Place your custom oder</h1>
						<p>Please fill the entire form.</p>
					</div>
			</div>
	</div>

	<script src="js/main.js"></script>
</body>
</html>