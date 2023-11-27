<?php

declare(strict_types=1);

function get_user(object $pdo, string $username){
    $query = "SELECT * FROM customer WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username",$username);
    $stmt->execute();

    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    return $results;
}

function get_id(object $pdo, string $username, string $pwd) {
    $query = "SELECT id FROM customer WHERE username = :username AND pwd = :pwd;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pwd", $pwd);
    $stmt->execute();
    $res = $stmt->fetch(PDO::FETCH_ASSOC);
    $user_id = $res['id'];
    return $user_id;
}