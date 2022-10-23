<?php 
@session_start();
 if(isset($_SESSION['id'])){
    include ('controllers/c_product.php');
    $product = new c_product();
    $product->actionBuy();
   }else{
      header("location: login.php");
    }