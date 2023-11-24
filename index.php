<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
?>

<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Page</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
    rel="stylesheet"/>
</head>

<body>

    <h1>
        <?php
        output_username();
        ?>
    </h1>
    <?php
    if(!isset($_SESSION["user_id"])){?>
        <div class="login-box">
    	<h1>Login</h1>
    	<form action="includes/login.inc.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
        <button>Login</button>
        </form>
    <?php
    }
    ?>
    <?php
    check_login_errors();
    ?>


    <div class="signup-box">
    	<h1>Sign Up</h1>
    	<h4>It's free and on    ly takes a minute</h4>
    	<form action="includes/signup.inc.php" method="post">
            <?php
            signup_input()
            ?>
        <button>Signup</button>
        </form>

    <?php
    check_signup_errors();
    ?>

    <?php
    if(isset($_SESSION["user_id"])){?>
        <div class="logout-box">
    	<h1>Logout</h1>
    	<form action="includes/logout.inc.php" method="post">
        <button>Logout</button>
        </form>
    <?php
    }
    ?>

   

</body>
</html>
