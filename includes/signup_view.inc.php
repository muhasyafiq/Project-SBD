<?php

declare(strict_types=1);

function signup_input(){
    echo '<input type="text" name="fullname" placeholder="Full name">';

    if (isset($_SESSION["signup_data"]["username"]) && 
    !isset($_SESSION["errors_signup"]["username_taken"])){
        echo '<input type="text" name="username" placeholder="Username" 
        value="' . $_SESSION["signup_data"]["username"] . '">';
    } else {
        echo '<input type="text" name="username" placeholder="Username">';
    }

    if (isset($_SESSION["signup_data"]["email"]) && 
    !isset($_SESSION["errors_signup"]["email_used"])&& 
    !isset($_SESSION["errors_signup"]["invalid_email"])){
        echo '<input type="text" name="email" placeholder="E-mail" 
        value="' . $_SESSION["signup_data"]["email"] . '">';
    } else {
        echo '<input type="text" name="email" placeholder="E-mail">';
    }
    echo '<input type="password" name="pwd" placeholder="Password">';
}

function check_signup_errors(){
    if (isset($_SESSION["error_signup"])){
        $errors = $_SESSION["error_signup"];


        foreach($errors as $error){
            echo '<p class ="form-error">'. $error . '</p>';
        }

        unset($_SESSION["error_signup"]);
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success"){
        echo '<p class="form-success">Signup success!</p>';
    }
}
