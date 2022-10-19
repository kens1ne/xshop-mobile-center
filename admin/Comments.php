<?php
@session_start();
if (isset($_SESSION['user'])) {

include ("controllers/c_home.php");
include ("controllers/c_product.php");
$home = new c_home();
$product = new c_product();
if(empty($_GET['id'])){
    $home->comments();
}else{
    $product->comments();
}
} else {
    header("location:login.php");
}
?>