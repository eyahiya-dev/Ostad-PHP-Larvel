<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if(!$name){
    $_SESSION['nameError'] = "Name field is Requried";
}

?>