<?php

declare(strict_types=1);

function Is_Order_Empty(string $package_name, string $package_type, string $amount) {
    if (empty($package_name) || empty($package_type) || empty($amount)) {
        return true;
    }
    else{
        return false;
    }
}

function create_order(object $pdo, string $name, string $package_type, string $amount, $userId,string $note) {
    set_order($pdo, $name, $package_type, $amount,$userId, $note);
 }