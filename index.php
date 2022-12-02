<?php
session_start();

if(!isset($_SESSION['rôle'])){
    header("location: login.php");
}else{
    header("location: listeEmployes.php");
}
?>