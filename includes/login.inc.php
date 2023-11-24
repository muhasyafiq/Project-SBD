<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once "dbh.inc.php";
        require_once "login_model.inc.php";
        require_once "login_contr.inc.php";

       //ERROR HANDLERS
       $errors =[];

        if (Is_Input_Empty($username,$pwd)){
           $errors["empty_input"] = 'Fill in all fields!';
        }
        $results = get_user($pdo,$username);

        if (is_username_wrong($results)){
            $errors["login_incorrect"] = 'Incorrent login info!';
        }
        if (!is_username_wrong($results) && 
            is_password_wrong($pwd,$results["pwd"])){
            $errors["login_incorrect"] = 'Incorrent login info!';
        }
       

       require_once 'config_session.inc.php';

       if ($errors ){
           $_SESSION["errors_login"] = $errors;

           
           header("Location: ../index.php");
           die();
       }


       $newSessionId = session_create_id();
       $sessionId = $newSessionId . "_" . $results["id"];
       session_id($sessionId);

       $_SESSION["user_id"] = $results["id"];
       $_SESSION["user_username"] = htmlspecialchars($results["username"]);
       $_SESSION['last_regeneration'] = time();

       header("Location: ../index.php?login=success");
       $pdo = null;
       $stmt = null;
       die();
    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }
}
else {
    header("Location: ../index.php");
    die();
}