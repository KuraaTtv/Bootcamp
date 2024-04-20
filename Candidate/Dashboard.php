<?php
 session_start();
 // include '../pages/koneksi.php';
     if(!isset($_SESSION['username'])){
        header("location: ../Auth/Login.php");
    }
    session_destroy();

