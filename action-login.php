<?php
@session_start();
include ("controllers/c_user.php");
if(!$_SESSION['id']){

    $c_user = new c_user();
    $c_user->actionLogin();
}else{
    header("location: index.php");
}