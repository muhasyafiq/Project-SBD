<?php

declare(strict_types= 1);

function set_order(object $pdo, string $name, string $package_type, string $amount, $user_id, string $note) {
    $query = "INSERT INTO product (package_name, package_type, user_id, amount, note) VALUES (:package_name, :package_type, :user_id, :amount, :note);";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":package_name", $name);
    $stmt->bindParam(":package_type", $package_type);
    $stmt->bindParam(":user_id", $user_id);
    $stmt->bindParam(":amount", $amount);
    $stmt->bindParam(":note", $note);
    $stmt->execute();
}


 function get_id(object $pdo, string $username){
    $query = "SELECT ID FROM customer WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username",$username);
    $stmt->execute();
    $res = $stmt->fetch(PDO::FETCH_ASSOC);
    $user_id = $res["id"];
    return $user_id;
}