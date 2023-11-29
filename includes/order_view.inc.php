<?php

declare(strict_types=1);

function check_order_errors(){
    if(isset($_SESSION["error_order"])){
        $errors = $_SESSION["error_order"];


        foreach ($errors as $error){
            echo '<p class="form-error">' . $error . '</p>';
        }
    
        unset($_SESSION["error_order"]);
    } else if (isset($_GET['order']) && $_GET['order'] === "success"){
        echo '<p class="form-success">Order Suces!</p>';
    }
}