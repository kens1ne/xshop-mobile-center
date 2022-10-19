<?php
@session_start();
if (isset($_SESSION['user'])) {

include ("controllers/c_user.php");
$user = new c_user();
switch($_POST['type']){
    case 'getInfo':
        $user->getInfo();
        break;
    case 'delete':
        $user->delete();
        break;
    case 'changes':
        $user->changeInfo();
        break;
    default:
        echo "error: unknown type";
}
} else {
    header("location:login.php");
}
?>