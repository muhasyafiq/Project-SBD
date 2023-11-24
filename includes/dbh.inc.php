<?php

$dsn = "pgsql:host=db-postgresql-sgp1-20507-do-user-15118002-0.c.db.ondigitalocean.com;port=25060;dbname=defaultdb";
$dbusername = "doadmin";
$dbpassword = "AVNS_UrUdZeSNbblMTHigAiz";

try {
    $pdo = new PDO($dsn,$dbusername,$dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: ". $e->getMessage());
}