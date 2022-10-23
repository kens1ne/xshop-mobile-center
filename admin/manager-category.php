<?php
@session_start();
if (isset($_SESSION['user'])) {

include ("controllers/c_category.php");
$category = new c_category();
if(isset($_POST['addCategory'])){
    $category->add();
}else{
switch($_POST['type']) {
    case 'getInfo':
        $category->getInfo();
        break;
    case 'delete':
        $category->delete();
        break;
    case 'changes':
        $category->changeInfo();
        break;
    default:
        echo 'Error: Unknown type';
}
}
} else {
    header("location:login.php");
}
?>