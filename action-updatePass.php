<?php 
@session_start();
 if(isset($_SESSION['id'])){
    include ('controllers/c_user.php');
    $updatePass = new c_user();
    $updatePass->actionUpdatePass();
 }