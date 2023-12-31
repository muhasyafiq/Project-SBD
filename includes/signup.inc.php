<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        //ERROR HANDLERS
        $errors =[];

        if (Is_Input_Empty($username,$pwd,$email)){
            $errors["empty_input"] = 'Fill in all fields!';
        }
        if (Is_Email_Invalid($email)){
            $errors["invalid_email"] = 'Invalid email used!';
        }
        if (Is_Username_Taken($pdo, $username)){
            $errors["username_taken"] = 'Username already taken!';
        }
        if (Is_email_registered($pdo, $email)){
            $errors["email_used"] = 'Email already registered!';
        }

        require_once 'config_session.inc.php';

        if ($errors ){
            $_SESSION["error_signup"] = $errors;

            $signupData =[
                "username" => $username,
                "email" => $email,
            ];
            $_SESSION["signup_data"] = $signupData;
            header("Location: ../login.php");
            die();
        }

        create_user($pdo, $fullname, $username, $pwd, $email);

        header("Location: ../login.php?signup=success");

        $pdo = null;
        $stmt = null;
        die();

    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }

} else {
    header("Location: ../index.php");
    die();
}