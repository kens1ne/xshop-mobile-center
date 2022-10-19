<?php 
@session_start();
 if(isset($_SESSION['id'])){
    include ('controllers/c_user.php');
    $comment = new c_user();
    $comment->actionCmt();
 }