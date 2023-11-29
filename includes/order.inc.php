<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];
    $package_name = $_POST["package_name"];
    $package_type = $_POST["package_type"];
    $amount = $_POST["amount"];
    $note = $_POST["note"];
    
    try {
        require_once 'dbh.inc.php';
        require_once 'order_model.inc.php';
        require_once 'order_contr.inc.php';
        //ERROR HANDLERS
        $errors =[];

        if (Is_Order_Empty($package_name,$package_type,$amount)){
            $errors["empty_input"] = 'Fill in all fields!';
        }

        require_once 'config_session.inc.php';

        if ($errors ){
            $_SESSION["error_order"] = $errors;
            header("Location: ../order.php");
            die();
        }

        $user_id = $_SESSION['user_id'];
        create_order($pdo, $package_name, $package_type, $amount, $user_id, $note);

        header("Location: ../index.php");

        $pdo = null;
        $stmt = null;
        die();

    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }

}