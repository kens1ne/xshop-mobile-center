
<?php 
session_start();
if($_SESSION['id']) {
    include("controllers/c_product.php");
    $product= new c_product();
    $product-> cart();
} else {
    header("location: login.php");
}
