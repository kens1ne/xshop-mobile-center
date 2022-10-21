<?php 
@session_start();
 if(isset($_SESSION['id'])){
    include ("controllers/c_user.php");
    $pro5 = new c_user();
    $pro5 -> updatePass();
 }