<?php
@session_start();
if (isset($_SESSION['user'])) {

include ("controllers/c_home.php");
include ("controllers/c_product.php");
$home = new c_home();
$product = new c_product();
if(empty($_GET['id'])){
    $home->products();
}else{
    $product->edit();
}
} else {
    header("location:login.php");
}
?>