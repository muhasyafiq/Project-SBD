<?php

declare(strict_types=1);

function Is_Input_Empty(string $username, string $pwd, string $email) {
    if (empty($username) || empty($pwd) || empty($email)) {
        return true;
    }
    else{
        return false;
    }
}

function Is_Email_Invalid(string $email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL,FILTER_FLAG_EMAIL_UNICODE)) {
        return true;
    }
    else{
        return false;
    }
}

function Is_username_taken(object $pdo, string $username) {
    if (get_username($pdo,$username)){
        return true;
    }
    else{
        return false;
    }
}

function Is_email_registered(object $pdo, string $email) {
    if (get_email($pdo, $email)){
        return true;
    }
    else{
        return false;
    }
}

function create_user(object $pdo, string $username, string $pwd, string $email) {
   set_user($pdo, $username, $pwd, $email);
}