<?php
$host = "localhost";
$user  = "root";
$pass = "";
$dbname = "bootcamp";
try
{
$dsn = 'mysql:host =.$host. dbname = .$dbname';
$PDO = new PDO($dsn , $user,$pass);
$PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "Connected";
}
catch(PDOException $ex)
{
    echo "Error: ". $ex->getMessage();
}




?>