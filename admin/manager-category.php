<?php
@session_start();
if (isset($_SESSION['user'])) {

include ("controllers/c_category.php");
$category = new c_category();
if(isset($_POST['addCategory'])){
    $category->add();
}else if(isset($_POST['editCategory'])){
    $category->edit();
}else if(isset($_POST['deleteCategory'])){
    $category->delete();
}
} else {
    header("location:login.php");
}
?>