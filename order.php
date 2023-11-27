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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&display=swap" rel="stylesheet">
</head>
<body>
	<div class="login-box">
    <h1>Order</h1>
    <form action="includes/order.inc.php" method="post">
      <input type="text" name="username" placeholder="Username">
      <input type="text" name="package_name" placeholder="Package Name">
      <input type="text" name="package_type" placeholder="Package Type">
			<input type="text" name="amount" placeholder="Amount">
			<input type="text" name="note" placeholder="Note">
      <input type="submit" value="Place order" />
    </form>
	</div>
</body>
</html>