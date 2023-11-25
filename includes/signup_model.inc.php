<?php

declare(strict_types=1);

function get_username(object $pdo, string $username) {
    $query = "SELECT username FROM customer WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username",$username);
    $stmt->execute();

    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    return $results;
}

function get_email(object $pdo, string $email) {
    $query = "SELECT username FROM customer WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email",$email);
    $stmt->execute();

    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    return $results;
}

function set_user(object $pdo,string $fullname, string $username, string $pwd, string $email) {
    $query = "INSERT INTO customer (fullname,username,pwd,email) VALUES (:fullname,:username,:pwd,:email);";
    $stmt = $pdo->prepare($query);

    $option = [
        'cost' => 12
    ];
    $hashedPwd = password_hash($pwd,PASSWORD_BCRYPT,$option);
    
    $stmt->bindParam(":fullname",$fullname);
    $stmt->bindParam(":username",$username);
    $stmt->bindParam(":pwd",$hashedPwd);
    $stmt->bindParam(":email",$email);
    $stmt->execute();
 }