<?php

require_once('../config.php');

if(isset($_POST["btnsubmit"]))
{
    $email = $_POST["email"];
    $password = $_POST["password"];
    $Role = $_POST["Role"];

    // Crypty password
    $Hash_Pass = password_hash($password,PASSWORD_DEFAULT);
    // Regular Expression for password
    $RegexPass = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/";
    if(!preg_match($RegexPass,$Hash_Pass))
    {
     $error = "Password No Valide";
    }
    try{
        $query = $PDO->prepare('INSERT INTO bootcamp.account (email,password,Role)VALUES(:email,:password,:Role)');
        $query->bindParam(":email",$email);
        $query->bindParam(":password",$Hash_Pass);
        $query->bindParam(":Role",$Role);
        $res= $query->execute();

    }
    catch(PDOException $ex)
    {
    echo "Error .$ex.";
    }
}