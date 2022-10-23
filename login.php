<?php
@session_start();
include ("controllers/c_user.php");
if(empty($_SESSION['id'])){
    $c_user = new c_user();
    $c_user->login();
}else{
    header("location: index.php");
}