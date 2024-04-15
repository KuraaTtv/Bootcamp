<?php

require_once('../config.php');
session_start();
$error = "";
$err_conf = "";
$err_role = "";


if($_SERVER['REQUEST_METHOD']=="POST"){
if(isset($_POST["btnsubmit"]))
{
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $Role = $_POST["Role"];
    // Regex
    $Regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/";
    if(!preg_match($Regex,$password))
    {
        $error = "Password Invalid";
        echo 'Error message set: ' . $error . '<br>';
         $_SESSION["error"] = $error;
         header("Location: ../Auth/Signup.php");
         exit; 
    }

    if($password != $repassword)
    {
        $err_conf = "Your passwords did not match.";
        $_SESSION["conf"] = $err_conf;
        header("Location: ../Auth/Signup.php");
         exit; 
    }


    if(empty($Role))
    {
        $err_role = "Your must chose a Role.";
        $_SESSION["Role"] = $err_role;
        header("Location: ../Auth/Signup.php");
         exit;
    }
        
    else{
        // Crypty password
        $Hash_Pass = password_hash($password,PASSWORD_DEFAULT);
    try{
        $query = $PDO->prepare('INSERT INTO bootcamp.account (email,password,Role)VALUES(:email,:password,:Role)');
        $query->bindParam(":email",$email);
        $query->bindParam(":password",$Hash_Pass);
        $query->bindParam(":Role",$Role);
        $res= $query->execute();

        header("Location: ../Home.php");
    }
    
   catch(PDOException $ex)
   {
    header("Location: ../Auth/Signup.php");
   }
  
}
}
}