<?php
 session_start();
     if(!isset($_SESSION['username']) ){
        header("location: ../Auth/Login.php");
    } 
    // !isset($_SESSION['email'])?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button name="logout">Login out</button>
</body>
</html>