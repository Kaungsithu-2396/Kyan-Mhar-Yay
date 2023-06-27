<?php 
    session_start();
    error_reporting(E_ERROR | E_PARSE);
    if(!$_SESSION['user'] and !$_SESSION['doctor']){
        header('location:sign_up.php');
    }elseif($_SESSION['doctor']){
       
    }

?>