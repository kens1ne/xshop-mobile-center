<?php
@session_start();
if (isset($_SESSION['user'])) {

include ("controllers/c_home.php");
$home = new c_home();
$home->category();
} else {
    header("location: login.php");
}
?>