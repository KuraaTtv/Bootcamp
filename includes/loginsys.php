<?php
require_once('../config.php');

// $http = (isset($_SERVER["PHP_AUTH_USER"]) && $_SERVER["PHP_AUTH_USER"] == $_POST["email"] && $_SERVER["PHP_AUTH_USER"] == $_POST["password"]);
if(isset($_POST["btnsubmit"]))
try{
$email = $_POST["email"];
$password = $_POST["password"];
{
$query = $PDO->prepare("SELECT * FROM bootcamp.account WHERE email=:email AND password=:password");
$query->bindParam(":email" ,$email);
$query->bindParam(":password",$password);
$query->execute();
$res = $query->fetch(PDO::FETCH_ASSOC);

if ($res) {
    header("Location: ../Home.php");
    exit();
} else {
    // Account not found or password incorrect, display error message
    $error_message = "Invalid email or password";
}
}
}
catch(PDOException $ex)
{
    echo "Error Message .$ex.";
}
