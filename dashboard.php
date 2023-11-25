<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["user_id"])){
header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Page</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
    rel="stylesheet"/>
    <span style="font-family: verdana, geneva, sans-serif;">
</head>
<body>
    
</body>
</html>