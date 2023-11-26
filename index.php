<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';

if(isset($_SESSION["user_id"])){
    header("location: dashboard.php");
        exit;
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&display=swap" rel="stylesheet">
</head>

<body>
    <h1>
        <?php
        output_username();
        ?>
    </h1>
    <div class="login-box">
     <h1>Login</h1>
     <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="submit" value="Login" />
    </form>
    <?php
    check_login_errors();
    ?>
    <p class="bottom">
          Not have an account? <a href="signup.php">Sign Up Here</a>
        </p>
    </div>
    



</body>
</html>
