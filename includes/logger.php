<?php 
session_start();
if(!isset($_SESSION['estado']) AND $_SESSION['estado']!=1){
    header('location:login.php');
    exit;
   }
 ?>
