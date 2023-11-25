<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["user_id"])){
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
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <link
  href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
  rel="stylesheet"/>
  <span style="font-family: verdana, geneva, sans-serif;">
</head>
<body>
  <header class="header-main">
    <div class="header-main-logo">
      <a href=""><img src="img\Logo-black.png" alt="RadiantSafe Logo"></a>
      <nav class="header-main-nav">
        <ul>
          <li><a href="#">ABOUT</a></li>
          <li><a href="#">TEAM</a></li>
          <li><a href="#">CONTACT</a></li>
        </ul>
      </nav>
    </div>
    <div class="header-main-logout">
      <a><form action="includes/logout.inc.php" method="post">
      <input type="image" src="img/logout.png" alt="Logout" style="width: 30px" />
      </form></a>
    </div>
  </header>
    
</body>
</html>