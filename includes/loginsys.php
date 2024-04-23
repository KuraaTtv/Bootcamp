<?php
require_once('../config.php');
 if(isset($_SESSION['email']))
 {
 header("location: ../Home.php");
 }
if(isset($_POST["btnsubmit"]))
try{
$email = $_POST["email"];
$password = $_POST["password"];
// $Hash_Pass = password_hash($password,PASSWORD_DEFAULT);
{
$query = $PDO->prepare("SELECT * FROM bootcamp.account WHERE email=:email AND password=:password");
$query->bindParam(":email" ,$email);
$query->bindParam(":password",$password);
$query->execute();
$res = $query->fetch(PDO::FETCH_ASSOC);

$_SESSION["email"] = $email;
if($res!=null){
    if ($res["Role"]=="Candidate") {
        header("Location: ../Candidate/Dashboard.php");
        exit();}

    if($res["Role"]=="Instructor")  {
            header("Location: ../Instructor/Dashboard.php");
            exit();
        }   
        
    if($res["Role"]=="Hire")  {
            header("Location: ../Hire/Dashboard.php");
            exit();
        } 
}
}
}
// }
catch(PDOException $ex)
{
    echo "Error Message ".$ex->getMessage();
}


/*if(password_verify($password,$Hash_Pass)){

        if ($res["Role"]=="Candidate") {
            header("Location: ../Candidate/Dashboard.php");
            exit();}
        
        elseif($res["Role"]=="Instructor")  {
            header("Location: ../Instructor/Dashboard.php");
        }   
        
        elseif($res["Role"]=="Hire")  {
            header("Location: ../Hire/Dashboard.php");
        } 
    }
}
// else{
//     header("Location: ../error.php");
// }*/
 // if($res){
    //     switch ($res["Role"]){
    //     case "Candidate":
    //         header("Location: .../Candidate/Dashboard.php");
    //         exit;
    //     case "Instructor" :
    //         header("Location: ../Instructor/Dashboard.php");
    //         exit;
    //     case "Hire" :
    //         header("Location: ../Hire/Dashboard.php");
    //         exit;
    //         default :
    //         header("Location: ../error.php");
    //         exit;
    // }