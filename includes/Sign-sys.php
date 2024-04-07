<?php

require_once('../config.php');

if(isset($_POST["btnsubmit"]))
{
    $email = $_POST["email"];
    $password = $_POST["password"];
    $Role = $_POST["Role"];
    try{
        $query = $PDO->prepare("INSERT INTO bootcamp.account ('email','password','Role')VALUES(:email,:password,:Role)");
        $query->bindParam(":email",$email);
        $query->bindParam(":password",$password);
        $query->bindParam(":Role",$Role);
        $res= $query->execute();

    }
    catch(PDOException $ex)
    {
    echo "Error .$ex.";
    }
}