<?php
@session_start();
if (isset($_SESSION['user'])) {

include ("controllers/c_product.php");
$product = new c_product();
if(isset($_POST['addProduct'])){
    $product->add();
}else if(isset($_POST['updateProduct'])){
    $product->update();
}
} else {
    header("location:login.php");
}
?>